<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>penggajian</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	 <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>;
    </script>
</head>
<ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(Auth::guest()): ?>
                            <li><a href="<?php echo e(url('/login')); ?>">Login</a></li>
                      
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="<?php echo e(url('/logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
<body>

	<div id="header">
		
			<ul id="navigation">
			<li class="selected">
					<a href="<?php echo e(url('/home')); ?>">home</a>
				</li>
				<li>
					<a href="<?php echo e(url('/Jabatan')); ?>">jabatan</a>
				</li>
				<li>
					<a href="<?php echo e(url('/Golongan')); ?>">Golongan</a>
				</li>
				<li>
					<a href="<?php echo e(url('/Kategori')); ?>">Kategori lembur</a>
				</li>
				<li>
					<a href="<?php echo e(url('/Pegawai')); ?>">Pegawai</a>
				</li>
				<li>
					<a href="<?php echo e(url('/Lembur')); ?>">Lembur Pegawai</a>
				</li>
				<li>
				<a href="<?php echo e(url('/Tunjangan')); ?>">Tunjangan</a>
				</li>
				<li>
				<a href="<?php echo e(url('/TunjanganP')); ?>">Tunjangan Pegawai</a>
				</li>
				<li>
				<a href="<?php echo e(url('/Penggajians')); ?>">Penggajian</a>
				</li>
				<li>

				
			</ul>
		</div>
	</div>
	
	
		
		
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>