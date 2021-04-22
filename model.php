<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>PLEASE</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
		<style>
			body { margin: 0; }
		</style>
	</head>
	<body>

 <!--NavBar Start-->
 <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="Img/logo.png"></a>
            <button class="navbar-toggler" ty[e="button" data-toggle="collapse"
            data-target="#navbarresponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Cantact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="visualize.php">Visualize</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!--NavBar End-->

		<script src="js/three.js"></script>
		<script src="js/OrbitalControls.js"></script>
		<script src="js/GLTFLoader.js"></script>

		<script>

			//Scene building
			const scene = new THREE.Scene();
			scene.background = new THREE.Color( 0xf0f0f0 );
			const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 1, 10000 );
		
			//renderer
			const renderer = new THREE.WebGLRenderer();
			renderer.setSize( window.innerWidth, window.innerHeight );
			document.body.appendChild( renderer.domElement );
			
			//cube
			const geometry = new THREE.BoxGeometry();
			const material = new THREE.MeshBasicMaterial( { color: 0x00ff00 } );
			const cube = new THREE.Mesh( geometry, material );
			scene.add( cube );
			cube.scale.set(100,100,100);
			
			//Chair Model
			const loader = new THREE.GLTFLoader();
			loader.load('scene.glb', function(glb){
				scene.add(glb.scene);
				renderer.render(scene, camera);
				chair = glb.scene.children[0];
				chair.position.set(0, 0, 0);
				chair.scale.set(.5, .5, .5);

			});

			//camera and controls
			camera.position.x = 700;
			camera.position.z = 700;
			camera.position.y = 500;
			controls = new THREE.OrbitControls(camera, renderer.domElement);


			//animate
			const animate = function () {
				requestAnimationFrame( animate );
				
			//Chair Animations
				//chair.rotation.x += 0.01;
				//chair.rotation.y += 0.01;
				//chair.rotation.z += 0.01;

			//Cube Animations
				//cube.rotation.x += 0.01;
        		//cube.rotation.y += 0.01;
				//cube.rotation.z += 0.01;
				

				renderer.render( scene, camera );
			

			};

			animate();
		</script>
	</body>
</html>