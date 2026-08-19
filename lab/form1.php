<?php require_once "form1_process.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Create your workspace</title>
  <link rel="stylesheet" href="form1.css?v=1">
</head>

<body>
  <form class="card" method="post" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" novalidate>

    <header class="card-header">
      <div class="eyebrow">
        <span class="eyebrow-box"></span>
        <span>GET STARTED</span>
      </div>
      <h1>Create your workspace</h1>
    </header>

    <div class="field">
      <label for="name">Full name</label>
      <input type="text" id="name" name="name" placeholder="Jane Doe"
             value="<?= htmlspecialchars($name) ?>">
      <?php if ($nameErr): ?><span class="error"><?= htmlspecialchars($nameErr) ?></span><?php endif; ?>
    </div>

    <div class="field">
      <label for="phone">Phone number</label>
      <input type="text" id="phone" name="phone" inputmode="numeric"
             placeholder="5551234567" value="<?= htmlspecialchars($phone) ?>">
      <?php if ($phoneErr): ?><span class="error"><?= htmlspecialchars($phoneErr) ?></span><?php endif; ?>
    </div>

    <div class="field">
      <label for="dob">Date of birth</label>
      <input type="date" id="dob" name="dob" value="<?= htmlspecialchars($dob) ?>">
      <?php if ($dobErr): ?><span class="error"><?= htmlspecialchars($dobErr) ?></span><?php endif; ?>
    </div>

    <div class="field">
      <label for="email">Work email</label>
      <input type="email" id="email" name="email" placeholder="jane@company.com"
             value="<?= htmlspecialchars($email) ?>">
      <?php if ($emailErr): ?><span class="error"><?= htmlspecialchars($emailErr) ?></span><?php endif; ?>
    </div>

    <div class="field">
      <label for="password">Password</label>
      <input type="password" id="password" name="password" placeholder="At least 8 characters">
      <?php if ($passwordErr): ?><span class="error"><?= htmlspecialchars($passwordErr) ?></span><?php endif; ?>
    </div>

    <div class="check-field">
      <label class="check-label">
        <input type="checkbox" name="updates" value="1" <?= $updates ? "checked" : "" ?>>
        <span class="custom-check"></span>
        <span>Email me product updates and tips</span>
      </label>
    </div>

    <div class="check-field">
      <label class="check-label">
        <input type="checkbox" name="terms" value="1" <?= $terms ? "checked" : "" ?>>
        <span class="custom-check"></span>
        <span>I agree to the <a href="#" onclick="return false;">Terms &amp; Privacy Policy</a></span>
      </label>
      <?php if ($termsErr): ?><span class="error check-error"><?= htmlspecialchars($termsErr) ?></span><?php endif; ?>
    </div>

    <?php if ($dbErr): ?><span class="error"><?= htmlspecialchars($dbErr) ?></span><?php endif; ?>

    <div class="buttons">
      <button type="submit" class="btn-primary">Create workspace</button>
      <button type="reset" class="btn-secondary">Reset</button>
    </div>
  </form>

  <?php if ($isValid): ?>
    <section class="card summary">
      <h2>Workspace created</h2>
      <table class="result-table">
        <tr><td>Full Name</td><td><?= htmlspecialchars($name) ?></td></tr>
        <tr><td>Phone Number</td><td><?= htmlspecialchars($phone) ?></td></tr>
        <tr><td>Date of Birth</td><td><?= htmlspecialchars($dob) ?></td></tr>
        <tr><td>Work Email</td><td><?= htmlspecialchars($email) ?></td></tr>
        <tr><td>Product Updates</td><td><?= $updates ? "Yes" : "No" ?></td></tr>
        <tr><td>Terms &amp; Privacy</td><td>Accepted</td></tr>
      </table>
    </section>
  <?php endif; ?>
</body>

</html>