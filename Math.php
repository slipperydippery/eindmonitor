<?phpdocumentor

class Math {
	public function add()
	{
		return array_sum(func_get_args());
	}
}

var_dump((new Math)->add(1,2,3));