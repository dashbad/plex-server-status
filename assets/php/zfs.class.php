<?php
class zpool
{
	public $name;
	public $status;
	
	function __construct($name, $status, $online)
	{
		$this->name = $name;
		$this->status = $status;
		$this->online = $online;

	}
		
	function makeButton()
	{

		$icon = '<i class="icon-' . ($this->online ? 'ok' : 'remove') . ' icon-white"></i>';
		$btn = $this->online ? 'success' : 'warning';
		$prefix = $this->online ? '<style="width:80px" class="btn btn-xs btn-' . $btn . '" data-toggle="collapse" data-target="#zfs_'.$this->name.'">' : '<style="width:90px" class="btn btn-xs btn-' . $btn . '" data-toggle="collapse" data-target="#zfs_'.$this->name.'">' ;
		$txt =  $this->status;
		$suffix = '</a>';
		
		return $prefix . $icon . " " . $txt . $suffix;

	}
}
?>