<?php
// FIXME this logic should be in hook or filter
// if login then redirect
if (isset($entry)):
    if (!empty($_GET['continue'])) {
        $continue = $_GET['continue'];
    } else {
        $continue = '/';
    }
    $response->redirect($continue);
endif
?>

<div id="login">
   <div class="title">
      <h2>
         Xinix
         <br>
         <strong>Account</strong>
      </h2>
   </div>
   <form action="" method="POST">
      <div class="row">
         <div class="span-12">
            <input type="text" name="username" placeholder="Email / Username" value="<?php echo @$entry['username'] ?>">
         </div>
         <div class="span-12">
            <input type="password" name="password" placeholder="Password">
         </div>
          <div class="span-12">
            <span class="myCheckbox">
                <label class="placeholder">
                    <input type="checkbox" id="accept" />
                    <span class="term">Keep me signed in</span>
                </label>
            </span>
         </div>
         <div class="span-12">
            <input type="submit" value="Sign In"></input>
         </div>
      </div>
   </form>
</div>
