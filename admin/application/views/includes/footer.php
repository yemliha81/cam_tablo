<!-- jQuery -->
<script src="<?php echo FATHER_BASE;?>template/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo FATHER_BASE;?>template/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="<?php echo FATHER_BASE;?>template/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="<?php echo FATHER_BASE;?>template/js/startmin.js"></script>
<script src="<?php echo FATHER_BASE;?>template/js/dropify.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
    $(document).ready(function() {
        
        if (window.location.protocol == 'http:') {
	
        	console.log("you are accessing us via "
        		+ "an insecure protocol (HTTP). "
        		+ "Redirecting you to HTTPS.");
        		
        	window.location.href =
        		window.location.href.replace(
        				'http:', 'https:');
        }
        
  $('.summernote').summernote();
});
</script>
</body>
</html>
