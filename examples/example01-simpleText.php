<?

// load pangrams
$pangrams = include_once dirname(__FILE__) . '/getPangrams.php';



// load library
include_once dirname(__FILE__) . '/../convertAccentedCharacters.php';
$cac = new convertAccentedCharacters();
$cac->toLower(false);
$cac->punctuation(true);
$cac->setDelimiter(' ');


?>


<!DOCTYPE html>
<html lang="en" class="notranslate" translate="no">
<head>
	<meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="p-5">
	<table class="table table-bordered table-hover">
		<thead>
			<tr>
				<th>Language</th>
				<th>Original</th>
				<th>Converted</th>
			</tr>
		</thead>
		<tbody>
			<? foreach ($pangrams as $language => $original) { ?>
			<tr>
				<td><?php echo $language; ?></td>
				<td width="50%"><?php echo $original; ?></td>
				<td width="50%"><?php echo $cac->getOutput($original); ?></td>
			</tr>
			<? } ?>
		</tbody>
	</table>
</div>

</body>
</html>

