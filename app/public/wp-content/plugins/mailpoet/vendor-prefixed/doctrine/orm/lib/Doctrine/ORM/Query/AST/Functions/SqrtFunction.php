<?php
 namespace MailPoetVendor\Doctrine\ORM\Query\AST\Functions; if (!defined('ABSPATH')) exit; use MailPoetVendor\Doctrine\ORM\Query\AST\SimpleArithmeticExpression; use MailPoetVendor\Doctrine\ORM\Query\Lexer; use MailPoetVendor\Doctrine\ORM\Query\Parser; use MailPoetVendor\Doctrine\ORM\Query\SqlWalker; class SqrtFunction extends \MailPoetVendor\Doctrine\ORM\Query\AST\Functions\FunctionNode { public $simpleArithmeticExpression; public function getSql(\MailPoetVendor\Doctrine\ORM\Query\SqlWalker $sqlWalker) { return $sqlWalker->getConnection()->getDatabasePlatform()->getSqrtExpression($sqlWalker->walkSimpleArithmeticExpression($this->simpleArithmeticExpression)); } public function parse(\MailPoetVendor\Doctrine\ORM\Query\Parser $parser) { $parser->match(\MailPoetVendor\Doctrine\ORM\Query\Lexer::T_IDENTIFIER); $parser->match(\MailPoetVendor\Doctrine\ORM\Query\Lexer::T_OPEN_PARENTHESIS); $this->simpleArithmeticExpression = $parser->SimpleArithmeticExpression(); $parser->match(\MailPoetVendor\Doctrine\ORM\Query\Lexer::T_CLOSE_PARENTHESIS); } } 