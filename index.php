<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" dir="ltr" lang="ja">
<?php
include('head.html');
?>
<body class="body">
    <header class="header">
        <h1>白昼夢小説</h1>
    </header>
    <main class="main">
    <div class="form_wrapper">
    <div class="form_table">
    <div class="form">
    <div class="table">
        <h2>入力してください</h2>
    </div>
    <div class="table">
            <div class="input_text">
                <p>
                <input type="text" id="custom01" />
                <label for="custom01">姓</label>
                </p>
            </div>
            <div class="input_text">
                <p>
                <input type="text" id="custom01" />
                <label for="custom01">名</label>
                </p>
            </div>
    </div>

    <div class="table">
            <div class="input_text">
                <p>
                <input type="text" id="custom01" />
                <label for="custom01">あだ名</label>
                </p>
            </div>
    </div>
    <div class="table">
            <div class="input_text">
                <p>
                <input type="button" id="custom01" />
                <label for="custom01">あだ名</label>
                </p>
            </div>
    </div>
    </div>
    </div>
    </div>

    <div class="novel none">
        <p class="novel_text">
            <?php
            include('novel001.html');
            ?>
        </p>
    </div>



    </main>
    <footer class="footer none">
        <div class="copy">
            <p>Copyright &copy; 2017 伊藤右貴 All Rights Reserved.</p>
        </div>
        <script type="text/javascript" src="js/main.js" charset="utf-8"></script>
    </footer>
    <script type="text/javascript" 　src="js/classie.js" 　charset="utf-8"></script>
</body>

</html>