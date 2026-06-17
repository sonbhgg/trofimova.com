
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Контакты</title>
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="icon" href="../logo.png" type="image/x-icon"> 
</head>
<body>
    <?php include '../includes/functions.php'; 
    	  include '../includes/header.php'; 
    	  
    	  $formResult = null;

	  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	    $name = $_POST['name'] ?? '';
	    $email = $_POST['email'] ?? '';
	    $message = $_POST['message'] ?? '';
	    
	    $formResult = processContactForm($name, $email, $message);
	  }
    ?>

<main>
    <h1>Контакты</h1>
    
    <?php if ($formResult): ?>
    <div style="padding: 1rem; background: <?= $formResult['success'] ? '#d4edda' : '#f8d7da'; ?>; border-radius: 4px; margin-bottom: 1rem;">
        <?= htmlspecialchars($formResult[$formResult['success'] ? 'message' : 'error']) ?>
    </div>
<?php endif; ?>

	<form method="post">
	    <input type="text" name="name" placeholder="Имя" value="<?= htmlspecialchars($_POST['name'] ?? '') ?>">
	    <input type="email" name="email" placeholder="Email" value="<?= htmlspecialchars($_POST['email'] ?? '') ?>">
	    <textarea name="message" placeholder="Сообщение"><?= htmlspecialchars($_POST['message'] ?? '') ?></textarea>
	    <button type="submit">Отправить</button>
	</form>
</main>
<?php include '../includes/footer.php'; ?>
</body>
</html>
