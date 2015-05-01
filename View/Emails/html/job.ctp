
<p> 
名前：<?php echo $Contact['name']; ?>さん 
</p>
<p>
メール：<?php echo $Contact['email']; ?> 
</p>
<p>
電話番号：<?php echo $Contact['tel']; ?>
</p>
<br>
メール確認いたしました。
<br>
下記の電話番号から「<?php echo $Job['title']; ?>」へのアルバイト応募のお申込みを完了させてください！
<br>
その際、電話ではじめに『でぃーくる！を見た。』と伝えるのを忘れないようお願いします。
<br>
<?php echo $Job['title']; ?>の電話番号：<a href="tel:<?php echo h($Job['tel']); ?>"><?php echo $Job['tel']; ?></a>
<br>
<br>
※注意※<br>
祝い金についてはこちらをお確認ください<br>
http://d-cle.com/jobs/giftmoney<br>
<br>
ご確認の上、採用後の祝い金についてはこちらからお申込みください！<br>
http://d-cle.com/jobs/giftform<br>
<br>
--<br>
このメールは でぃ−くる！ http://d-cle.com の求人フォームから自動送信されました。<br>




