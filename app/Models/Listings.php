<?php

namespace App\Models;

class Listings {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => "Ikan Pari",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer porta tortor vel quam consequat semper. Pellentesque sit amet cursus lectus, ac congue nulla. Proin egestas pellentesque dui, sagittis interdum nulla convallis vitae. Maecenas faucibus ullamcorper gravida. Nam nec pulvinar sem. Ut feugiat luctus nulla, a consectetur arcu sagittis a. Nunc a maximus nibh.'
            ],
            [
                'id' => 2,
                'title' => 'Ikan Hiu',
                'description' => 'Nullam semper tincidunt erat, eget vulputate dui maximus ac. Donec non dui placerat, maximus odio sit amet, convallis nunc. Curabitur euismod gravida tortor sed interdum. Praesent mattis est quis tellus consectetur, consectetur mollis erat vehicula. Vivamus id neque urna. Proin id massa mollis, condimentum dolor sed, varius sem. Nam eu neque sit amet augue fermentum commodo. Ut sit amet nunc ac orci pellentesque fringilla eget eget orci.'
            ]
            ];
    }

    public static function search($id) {
        $listings = self::all();

        foreach ($listings as $list) {
            // dd($list);
            if ($list['id'] == $id) {
                return $list;
            }
        };
    }
}