<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset('/')}}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') | Nhóm 3</title>
    <link href="front/pluginsAdmin/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="front/pluginsAdmin/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" type="text/css"/>
    <link href="front/cssAdmin/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	  <div class="container">
		<a class="navbar-brand" href="{{route('admin.home.index')}}">CozaStore</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		  <span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
		  <ul class="navbar-nav me-auto">
			<li class="nav-item">
			  <a class="nav-link" href="{{route('admin.product')}}">Product</a>
			</li>
			
		  </ul>
		  <ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="bi-box-arrow-right"></i></a>
				</li>
			</ul>
		</div>
	  </div>
	</nav>
        
    @yield('body')

    <!-- Modal -->
    {{-- <div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">New Major</h5>
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                      <label for="txtMajor" class="col-sm-3 col-form-label required">Major name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="txtMajor">
                      </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save</button>
			  </div>
        </div>
        </div>
    </div> --}}

    <script src="front/pluginsAdmin/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>