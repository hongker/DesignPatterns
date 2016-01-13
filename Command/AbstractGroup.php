<?php
namespace Command;

abstract class AbstractGroup {
	public abstract function find();

	public abstract function add();

	public abstract function delete();

	public abstract function change();

	public abstract function plan();


}