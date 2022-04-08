<?php
namespace App\Traits;

trait Sluggable
{
	abstract public function sluggable(): array;

	public static function bootSluggable()
	{
		/*
		static::saving(function ($model) {
			$settings = $model->sluggable();
			$model->slug = $model->generateSlug($settings['source']);
		});
		*/
	}

	public function generateSlug($string)
	{
		return strtolower(preg_replace(
			['/[^\w\s]+/', '/\s+/'],
			['', '-'],
			$string
		));
	}
}

/*
in Eloquent Model:

	use Sluggable; // Attach the Sluggable trait to the model

	public function sluggable() {
		return [
			'source' => 'name',
		];
	}
*/