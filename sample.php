<h1>This is the sample for download multiple apk files.</h1>
<a href="" style="display: none;" id="aTag" target="_blank"></a>
<?php
	$dir = './apks/';
	$files = scandir($dir);
	for( $i = 0; $i < count($files); $i++){
		$fileName = $files[$i];
		if( $fileName != '.' && $fileName != '..'){
			$file = $dir . $fileName;
			if( !file_exists($file) ) {
				die("File not found");
			}
?>
<script type="text/javascript">
	var filePath = '<?= $file; ?>';
	var aTag = document.getElementById("aTag");
	aTag.setAttribute("href", filePath);
	aTag.click();
</script>
<?php
		}
	}
?>