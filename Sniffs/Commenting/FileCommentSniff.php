<?php
/**
 * Parses and verifies the doc comments for classes.
 *
 * PHP version 5
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006-2012 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */

if (class_exists('PHP_CodeSniffer_CommentParser_ClassCommentParser', true) === false) {
    $error = 'Class PHP_CodeSniffer_CommentParser_ClassCommentParser not found';
    throw new PHP_CodeSniffer_Exception($error);
}

if (class_exists('PEAR_Sniffs_Commenting_FileCommentSniff', true) === false) {
    $error = 'Class PEAR_Sniffs_Commenting_FileCommentSniff not found';
    throw new PHP_CodeSniffer_Exception($error);
}

if (!class_exists('Gandalf_Sniffs_Commenting_FileCommentSniff')) {
/**
 * Parses and verifies the doc comments for classes.
 *
 * Verifies that :
 * <ul>
 *  <li>A doc comment exists.</li>
 *  <li>There is a blank newline after the short description.</li>
 *  <li>There is a blank newline between the long and short description.</li>
 *  <li>There is a blank newline between the long description and tags.</li>
 *  <li>Check the order of the tags.</li>
 *  <li>Check the indentation of each tag.</li>
 *  <li>Check required and optional tags and the format of their content.</li>
 * </ul>
 *
 * @category  PHP
 * @package   PHP_CodeSniffer
 * @author    Greg Sherwood <gsherwood@squiz.net>
 * @author    Marc McIntyre <mmcintyre@squiz.net>
 * @copyright 2006-2012 Squiz Pty Ltd (ABN 77 084 670 600)
 * @license   https://github.com/squizlabs/PHP_CodeSniffer/blob/master/licence.txt BSD Licence
 * @version   Release: 1.4.3
 * @link      http://pear.php.net/package/PHP_CodeSniffer
 */
class Gandalf_Sniffs_Commenting_FileCommentSniff extends PEAR_Sniffs_Commenting_FileCommentSniff
{

    /**
     * Tags in correct order and related info.
     *
     * @var array
     */
    protected $tags = array(
                       'category'   => array(
                                        'required'       => false,
                                        'allow_multiple' => false,
                                        'order_text'     => 'precedes @package',
                                       ),
                       'package'    => array(
                                        'required'       => false,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @category',
                                       ),
                       'subpackage' => array(
                                        'required'       => false,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @package',
                                       ),
                       'author'     => array(
                                        'required'       => true,
                                        'allow_multiple' => true,
                                        'order_text'     => 'follows @subpackage (if used) or @package',
                                       ),
                       'copyright'  => array(
                                        'required'       => true,
                                        'allow_multiple' => true,
                                        'order_text'     => 'follows @author',
                                       ),
                       'license'    => array(
                                        'required'       => false,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @copyright (if used) or @author',
                                       ),
                       'version'    => array(
                                        'required'       => false,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @license',
                                       ),
                       'link'       => array(
                                        'required'       => false,
                                        'allow_multiple' => true,
                                        'order_text'     => 'follows @version',
                                       ),
                       'see'        => array(
                                        'required'       => false,
                                        'allow_multiple' => true,
                                        'order_text'     => 'follows @link',
                                       ),
                       'since'      => array(
                                        'required'       => false,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @see (if used) or @link',
                                       ),
                       'deprecated' => array(
                                        'required'       => false,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @since (if used) or @see (if used) or @link',
                                       ),
                );


}//end class

}
?>
