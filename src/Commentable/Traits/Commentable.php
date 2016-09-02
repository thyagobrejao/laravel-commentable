<?php namespace Slynova\Commentable\Traits;

/**
 * Part of the Laravel-Commentable package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the MIT License.
 *
 * This source file is subject to the MIT License that is
 * bundled with this package in the LICENSE file.
 * It is also available at the following URL: http://opensource.org/licenses/MIT
 *
 * @version    1.0.0
 * @author     Slynova
 * @license    MIT
 * @copyright  (c) Slynova
 */

use Slynova\Commentable\Models\Comment;

trait Commentable
{
    /**
     * Get all of the model's comments.
     *
     * @return Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'commentable');
    }
}
