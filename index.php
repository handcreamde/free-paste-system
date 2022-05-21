<head>
  <meta charset="utf-8">
  <meta name="google-site-verification" content="tn-ijQJquJQDgR3wlRTB8I2swGjDmTH_3NQdi4VbYBI" />
<meta name="robots" content="all">
<meta name="theme-color" content="#525252">
<meta name="keywords" content="paster, misskey, mastodon, pastebin, opensource, オープンソース, フリー, github, git, txt, 世界初, beta, β">
<meta name="description" content="おそらく世界初のオープンソースのテキストPasteサービス。">
<meta property="og:title" content="Paster - フリーでオープンソースのテキストペーストサービス">
<meta property="og:type" content="article">
<meta property="og:description" content="おそらく世界初のオープンソースのテキストPasteサービス。">
<meta property="og:url" content="https://paste.f5.si">
<meta property="og:image" content="https://paste.f5.si/a.png">
<meta property="og:site_name" content="Paster - フリーでオープンソースのテキストペーストサービス">
  <title>Paster v0.1.0</title>
  <style>
@import url('https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300&display=swap');
body {
  font-family: 'M PLUS Rounded 1c', sans-serif;
}
textarea:focus {
  border:1px solid #858585;
  outline:0;
  box-shadow: 10px 10px 15px -10px;
}
textarea {
  border:1px solid #000000;
  outline:0;
  box-shadow: 10px 10px 15px -10px;
}
</style>
</head>
<body>
  <center><p><font size="6">Paster <b>β</b></font></p>
  <hr>
  <form action="create.php" method="post">
    <h3>Paste text</h3>
    <textarea name="paste" cols="80" rows="20"></textarea>
    <p><input type="submit" name="send" value="Create!"></p>
  </form>
<hr>
<p>© <a href="moto.php" alt="前のバージョンのURL" title="前のバージョン(ゴミ)"><font color="black">技術力の低さを「軽量化」という言い訳でごまかすプログラミング初心者の鑑</font></a><br><a href="https://milkey.homes/@a"><font color="black">作成者</font></a></p>
</center>
</body>