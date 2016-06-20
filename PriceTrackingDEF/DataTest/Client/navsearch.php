    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">PriceTracking</a>
        </div>
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		
		<form class="navbar-form navbar-left" role="search" id="navBarSearchForm" action="search.php">
			<div class="form-group">
				<input type="text" name="search_something" class="form-control" placeholder="What you want?">
			</div>
			<button type="submit" class="btn btn-default">Search</button>
		</form>
		
        <div id="navbar" class="navbar-collapse collapse">
          <form class="navbar-form navbar-right" method="post" action="login.php">
            <div class="form-group">
              <input type="text" name="user_id" placeholder="User Id" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" name="pass" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button><input type="hidden" name="submitted" value="TRUE" />
			<a href="ForgotPassword.php" class="btn btn-danger">Forgot Password</a>
          </form>
        </div>
      </div>
    </nav>