<?php
namespace Visitor;

abstract class Element {
	public abstract function doSomething();

	public abstract function accept(IVisitor $vistor);
}