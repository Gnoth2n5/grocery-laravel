<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::beginTransaction();
        try {

            $this->call([
                RoleSeed::class,
                UserSeed::class,
                OrderStatusSeed::class,
                CategoriesSeed::class,
                SuppliersSeed::class,
                CouponsSeed::class,
                AddressesSeed::class,
                ProductsSeed::class,
                CartSeed::class,
                OrdersSeed::class,
                OrderDeltailSeed::class,
                ReviewsSeed::class,
            ]);

            // Nếu tất cả các lệnh chạy thành công, commit các thay đổi
            DB::commit();
        } catch (\Exception $e) {
            // Nếu có lỗi xảy ra, rollback tất cả các thay đổi
            DB::rollBack();

            // Hiển thị hoặc ghi nhật ký lỗi
            echo "Seeder lỗi: " . $e->getMessage();
        }
    }
}
