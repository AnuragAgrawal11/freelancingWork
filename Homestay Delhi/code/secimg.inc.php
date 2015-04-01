<?php session_start(); ?>
<?php


class PJ_SecurityImage
{

        function PJ_SecurityImage($key)
        {
                $this->code = '';
                $this->key = $key;
        } // End PJ_SecurityImage

        function encrypt($plain_text)
        {
            $this->code = trim(sha1($plain_text.$this->key));
        } // End encrypt

        function checkCode($mystring,$checksum)
        {
            $this->encrypt($mystring);
            if ($this->code == $checksum)
                return true;
            else
                return false;
        } // End checkCode

        function printImage($random_number)
        {
            header("Content-type: image/jpeg");
            $im = @imagecreate(150, 40) or die("Cannot Initialize new GD image stream");
            $background_color = imagecolorallocate($im, 255, 255, mt_rand(204,255));

			for ($i=0;$i<strlen($random_number);$i++)
			{
            	$text_color = imagecolorallocate($im, mt_rand(0,127), mt_rand(0,127), mt_rand(0,127));
				$display = substr($random_number,$i,1);
				$x = ($i*30) + mt_rand(3,16);
				$y = mt_rand(3,26);
				imagestring($im, 5, $x, $y, $display, $text_color);
			}

			for ($i=1;$i<100;$i++)
			{
            	if ($i == 10 || $i == 30 || $i == 50 || $i == 70 || $i == 90)
                {
                	$text_color = imagecolorallocate($im, mt_rand(0,127), mt_rand(0,127), mt_rand(0,127));
                }

				imagesetpixel($im,mt_rand(1,150),mt_rand(1,40),$text_color);
			}


            imagejpeg($im);
            imagedestroy($im);
        } // End printImage

        function get()
        {
            return $this->code;
        } // End get

} // End class PJ_SecurityImage

?>
