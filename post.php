<?php include 'inc/header.php'; ?>


<?php 
	if (!isset($_GET['id']) || $_GET['id'] == NULL) {
		header("Location: 404.php");
	} else {
		$id = $_GET['id'];
	} 
	?>

	<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">

			<?php $query = "select * from tbl_post where id=$id";
			$post = $db->select($query);
			if ($post) {
				while ($result = $post->fetch_assoc()){ ?>
				
				<h2><?php echo $result['title']; ?></h2>
				<h4><?php echo $fm->formatData($result['date']); ?> , By <a href="#"><?php echo $result['author']; ?></a></h4>
				<img src="admin/<?php echo $result['image']; ?> " alt="Post Image"/>

				<?php echo $result['body'];  ?>
				<?php } ?>

				<?php  } else {header("Location:404.php");}?>
	</div>

		</div>
		<?php include 'inc/sidebar.php'; ?>
		<?php include 'inc/footer.php'; ?>