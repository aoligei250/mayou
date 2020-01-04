<?php
/**
 * Created by PhpStorm.
 * User: 51534
 * Date: 2019/10/9
 * Time: 23:24
 */
namespace app\index\model;

use PHPMailer\PHPMailer;
use think\Model;


class Mail extends Model
{
    //发送邮箱验证码
    public function email($targit_mail,$info)
    {
        $toemail = $targit_mail;//定义收件人的邮箱

       $mail=new PHPMailer();

        $mail->isSMTP();// 使用SMTP服务
        $mail->CharSet = "utf8";// 编码格式为utf8，不设置编码的话，中文会出现乱码
        $mail->Host = "smtp.qq.com";// 发送方的SMTP服务器地址
        $mail->SMTPAuth = true;// 是否使用身份验证
        $mail->Username = "1547575288@qq.com" ; //发送人邮箱
        $mail->Password = "ocfrhvzgehrpjgbf";   //发送人邮箱授权码
        $mail->SMTPSecure = "ssl";
        $mail->Port =465;  //qq邮箱端口号

			$mail->setFrom("1547575288@qq.com","杂货铺");// 设置发件人信息，如邮件格式说明中的发件人，这里会显示为Mailer(xxxx@163.com），Mailer是当做名字显示
			$mail->addAddress($toemail,'Wang');// 设置收件人信息，如邮件格式说明中的收件人，这里会显示为Liang(yyyy@163.com)
			$mail->addReplyTo("1547575288@qq.com","Reply");// 设置回复人信息，指的是收件人收到邮件后，如果要回复，回复邮件将发送到的邮箱地址
			//$mail->addCC("xxx@163.com");// 设置邮件抄送人，可以只写地址，上述的设置也可以只写地址(这个人也能收到邮件)
			//$mail->addBCC("xxx@163.com");// 设置秘密抄送人(这个人也能收到邮件)
			//$mail->addAttachment("bug0.jpg");// 添加附件


			$mail->Subject = "注册成功！！！";// 邮件标题
			$mail->Body = "邮件内容是 <b>$info</b>，哈哈哈！";// 邮件正文
			//$mail->AltBody = "This is the plain text纯文本";// 这个是设置纯文本方式显示的正文内容，如果不支持Html方式，就会用到这个，基本无用

			if(!$mail->send()){// 发送邮件
                echo "发送失败";
                echo "Mailer Error: ".$mail->ErrorInfo;// 输出错误信息
            }else{
                return  1;
            }
		}

}