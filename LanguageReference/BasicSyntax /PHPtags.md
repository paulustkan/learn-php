## open tag
```
<?php
```

## close tag
```
?>
```

## echo tag
```
<?php echo 'something'; ?>
<?= 'something'; ?> (PHP 5.4 and later)
```

## short open tag
```
<? 
```
- enabled using the *short_open_tag* php.ini configuration file directive
- Or it configured with the *--enable-short-tags* option

## omit the PHP closing tag
If a file contains only PHP code, it is preferable to omit the PHP closing tag at the end of the file