<?php
namespace Interpreter;

abstract class AbstractExpression {
	public abstract function interpreter(Context $context);
}