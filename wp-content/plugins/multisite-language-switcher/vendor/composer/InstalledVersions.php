<?php











namespace Composer;

use Composer\Semver\VersionParser;






class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => '2.4.10',
    'version' => '2.4.10.0',
    'aliases' => 
    array (
    ),
    'reference' => '9889b643ab59b10d7ae3c81abc547f573659e2ce',
    'name' => 'lloc/multisite-language-switcher',
  ),
  'versions' => 
  array (
    'composer/installers' => 
    array (
      'pretty_version' => 'v1.9.0',
      'version' => '1.9.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b93bcf0fa1fccb0b7d176b0967d969691cd74cca',
    ),
    'lloc/multisite-language-switcher' => 
    array (
      'pretty_version' => '2.4.10',
      'version' => '2.4.10.0',
      'aliases' => 
      array (
      ),
      'reference' => '9889b643ab59b10d7ae3c81abc547f573659e2ce',
    ),
    'roundcube/plugin-installer' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'shama/baton' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
  ),
);







public static function getInstalledPackages()
{
return array_keys(self::$installed['versions']);
}









public static function isInstalled($packageName)
{
return isset(self::$installed['versions'][$packageName]);
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

$ranges = array();
if (isset(self::$installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = self::$installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', self::$installed['versions'][$packageName])) {
$ranges = array_merge($ranges, self::$installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}





public static function getVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['version'])) {
return null;
}

return self::$installed['versions'][$packageName]['version'];
}





public static function getPrettyVersion($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return self::$installed['versions'][$packageName]['pretty_version'];
}





public static function getReference($packageName)
{
if (!isset(self::$installed['versions'][$packageName])) {
throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}

if (!isset(self::$installed['versions'][$packageName]['reference'])) {
return null;
}

return self::$installed['versions'][$packageName]['reference'];
}





public static function getRootPackage()
{
return self::$installed['root'];
}







public static function getRawData()
{
return self::$installed;
}



















public static function reload($data)
{
self::$installed = $data;
}
}
