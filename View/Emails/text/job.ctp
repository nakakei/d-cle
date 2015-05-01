<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Emails.text
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
名前：<?php echo $Contact['name']; ?>さん 
メール：<?php echo $Contact['email']; ?> 
電話番号：<?php echo $Contact['tel']; ?>


メール確認いたしました。

下記の電話番号から「<?php echo $Job['title']; ?>」へのアルバイト応募のお申込みを完了させてください！

その際、電話ではじめに『でぃーくる！を見た。』と伝えるのを忘れないようお願いします。

<?php echo $Job['title']; ?>の電話番号：<a href="tel:<?php echo $Job['tel']; ?>"><?php echo $Job['tel']; ?></a>


※注意※
祝い金についてはこちらをお確認ください
http://d-cle.com/money_about

ご確認の上、採用後の祝い金についてはこちらからお申込みください！
http://d-cle.com/gift-money

--
このメールは でぃ−くる！ http://d-cle.com の求人フォームから自動送信されました。

