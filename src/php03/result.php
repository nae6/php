<!-- ifで未回答の際の遷移先を指定している、データが正しく処理されなかった時用 -->
<!-- $option = htmlspecialchars($_POST['option'], ENT_QUOTES) ?? '';最後はこうするのが、現時点で最善の書き方 -->

<?php
require_once('config/status_codes.php');

$answer_code = isset($_POST['answer_code']) ? htmlspecialchars($_POST['answer_code'], ENT_QUOTES) : null;
// 上の形を省略したベストプラクティスな書き方は以下
$option = htmlspecialchars($_POST['option'] ?? '', ENT_QUOTES);

if (empty($option)) {
    header('Location: index.php');
    exit;
}

$code = '';

foreach ($status_codes as $status_code) {
    if ($status_code['code'] === $answer_code) {
        $code = $status_code['code'];
        $description = $status_code['description'];
    }
$result = $option === $code;
// 一致しなかった時は、$resultの値はfalse偽が入る。だからif関数では、$resultだけで真偽判定ができている
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Code Quiz</title>
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/result.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a href="/" class="header__logo">Status Code Quiz</a>
        </div>
    </header>
    <main>
        <div class="result__content">
            <div class="result">
                <?php if ($result): ?>
                <h2 class="result__text--correct">正解</h2>
                <?php else: ?>
                <h2 class="result__text--incorrect">不正解</h2>
                <?php endif; ?>
            </div>
            <div class="answer-table">
                <table class="answer-table__inner">
                    <tr class="answer-table__row">
                        <th class="answer-table__header">ステータスコード</th>
                        <td class="answer-table__text">
                            <?php echo $code ?>
                        </td>
                    </tr>
                    <tr class="answer-table__row">
                        <th class="answer-table__header">説明</th>
                        <td class="answer-table__text">
                            <?php echo $description ?>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>