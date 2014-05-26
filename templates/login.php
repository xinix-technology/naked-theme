<script type="text/javascript">
    $(".alert p").click(function() {
        $(this).addClass("hide");
    });
</script>
<div id="login-pane">
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
               <label class="placeholder">
               <input type="checkbox" class="checkbox">
                  Keep me sign in
               </label>
            </div>
            <div class="span-12">
               <input type="submit" value="Sign In"></input>
            </div>
         </div>
      </form>
   </div>
</div>
