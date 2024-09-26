<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscription = new Subscription();
        $subscription->id = 1;
        $subscription->course_count = 1;
        $subscription->subscription_name = 'pruebita';
        $subscription->price = 70.00;
        $subscription->duration_months = 4;
        $subscription->description = 'se parte del curso y aprende muchos fundamentos claves para tu vida profesional!';
        $subscription->save();

        $subscription = new Subscription();
        $subscription->id = 2;
        $subscription->course_count = 2;
        $subscription->subscription_name = 'achorado';
        $subscription->price = 125.00;
        $subscription->duration_months = 4;
        $subscription->description = 'se parte del curso y aprende muchos fundamentos claves para tu vida profesional!';
        $subscription->save();

        $subscription = new Subscription();
        $subscription->id = 3;
        $subscription->course_count = 3;
        $subscription->subscription_name = 'opulencia';
        $subscription->price = 180.00;
        $subscription->duration_months = 4;
        $subscription->description = 'se parte del curso y aprende muchos fundamentos claves para tu vida profesional!';
        $subscription->save();
    }
}
