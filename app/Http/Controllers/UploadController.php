<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    protected $allowed_ext = ["png", "jpg", "gif", 'jpeg'];

    public function image(Request $request)
    {
        $file = $request->file('file');
        $filename = $this->save($file, 'article', auth()->id(), 800);
        if ($filename) {
            return response()->json(['error' => false, 'path' => $filename['path']]);
        } else {
            return response()->json(['error' => true]);
        }
    }

    /**
     * @param $file [文件]
     * @param $folder [目錄]
     * @param $file_prefix [前綴]
     * @param bool $max_width [寬度]
     * @return array|bool
     */
    public function save($file, $folder, $file_prefix, $max_width = false)
    {
        // 构建存储的文件夹规则，值如：uploads/images/avatars/201709/21/
        // 文件夹切割能让查找效率更高。
        $folder_name = "uploads/images/$folder/" . date("Ym/d", time());

        // 文件具体存储的物理路径，`public_path()` 获取的是 `public` 文件夹的物理路径。
        // 值如：/home/vagrant/Code/larabbs/public/uploads/images/avatars/201709/21/
        $upload_path = public_path() . '/' . $folder_name;

        // 获取文件的后缀名，因图片从剪贴板里黏贴时后缀名为空，所以此处确保后缀一直存在
        $extension = strtolower($file->getClientOriginalExtension()) ? : 'png';

        // 拼接文件名，加前缀是为了增加辨析度，前缀可以是相关数据模型的 ID
        // 值如：1_1493521050_7BVc9v9ujP.png
        $filename = $file_prefix . '_' . time() . '_' . str_random(10) . '.' . $extension;

        // 如果上传的不是图片将终止操作
        if (!in_array($extension, $this->allowed_ext)) {
            return false;
        }

        $disk = \Illuminate\Support\Facades\Storage::disk('qiniu');
        // create a file
        $disk->put( $filename, file_get_contents($file->getRealPath()));

        // 将图片移动到我们的目标存储路径中
        //$file->move($upload_path, $filename);

        // 如果限制了图片宽度，就进行裁剪
        //        if ($max_width && $extension != 'gif') {
        //
        //            // 此类中封装的函数，用于裁剪图片
        //            $this->reduceSize($upload_path . '/' . $filename, $max_width);
        //        }

        return [
            'path' => config('app.url') . "/$filename",
        ];
    }

    public function reduceSize($file_path, $max_width)
    {
        Log::info($file_path);
        // 先实例化，传参是文件的磁盘物理路径
        $image = Image::make($file_path);

        // 进行大小调整的操作
        $image->resize(
            $max_width, null, function ($constraint) {

            // 设定宽度是 $max_width，高度等比例双方缩放
            $constraint->aspectRatio();

            // 防止裁图时图片尺寸变大
            $constraint->upsize();
        }
        );

        $insert_path = public_path() . '/img/logo.png';

        //给图片打水印
        $image->insert($insert_path, 'bottom-right', 1, 1);
        // 对图片修改后进行保存
        $image->save();
    }

}
