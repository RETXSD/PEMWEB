Here’s the full setup for **Model, Migration, Seeder, Filament Resource, Livewire, and Routing** based on the information you've provided.

---

### ## Product

#### Model, Migration, and Seeder

1. **Model**: `php artisan make:model Product -ms`

2. **Migration** (`create_products_table.php`):

```php
public function up(): void
{
    Schema::create('products', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->text('description');
        $table->string('image');
        $table->timestamps();
    });
}
```

3. **Seeder** (`ProductSeeder.php`):

```php
<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Sample Product',
            'description' => 'This is a sample product description.',
            'image' => '',
        ]);
    }
}
```

4. **Model** (`Product.php`):

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'image',
    ];
}
```

---

### ## Seo

#### Model, Migration, and Seeder

1. **Model**: `php artisan make:model Seo -ms`

2. **Migration** (`create_seos_table.php`):

```php
public function up(): void
{
    Schema::create('seos', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->text('description');
        $table->string('keywords');
        $table->string('canonical_url');
        $table->string('robots');
        $table->string('og_image');
        $table->timestamps();
    });
}
```

3. **Seeder** (`SeoSeeder.php`):

```php
<?php

namespace Database\Seeders;

use App\Models\Seo;
use Illuminate\Database\Seeder;

class SeoSeeder extends Seeder
{
    public function run(): void
    {
        Seo::create([
            'title' => 'Sample SEO Title',
            'description' => 'This is a sample SEO description.',
            'keywords' => 'sample, seo, keywords',
            'canonical_url' => 'https://example.com',
            'robots' => 'index, follow',
            'og_image' => '',
        ]);
    }
}
```

4. **Model** (`Seo.php`):

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seo extends Model
{
    use HasFactory;

    protected $table = 'seos';

    protected $fillable = [
        'title',
        'description',
        'keywords',
        'canonical_url',
        'robots',
        'og_image',
    ];
}
```

---

### ## PageConfig

#### Model, Migration, and Seeder

1. **Model**: `php artisan make:model PageConfig -ms`

2. **Migration** (`create_page_configs_table.php`):

```php
public function up(): void
{
    Schema::create('page_configs', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('detail');
        $table->string('image');
        $table->timestamps();
    });
}
```

3. **Seeder** (`PageConfigSeeder.php`):

```php
<?php

namespace Database\Seeders;

use App\Models\PageConfig;
use Illuminate\Database\Seeder;

class PageConfigSeeder extends Seeder
{
    public function run(): void
    {
        if(PageConfig::count() == 0){
            PageConfig::create([
                'title' => 'Welcome to Our Website',
                'detail' => 'We are glad to have you here. Explore our services and offerings.',
                'image' => '',
            ]);
        } 
    }
}
```

4. **Model** (`PageConfig.php`):

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageConfig extends Model
{
    use HasFactory;

    protected $table = 'page_configs';

    protected $fillable = [
        'title',
        'detail',
        'image',
    ];
}
```

---

### ## Logo

#### Model, Migration, and Seeder

1. **Model**: `php artisan make:model Logo -ms`

2. **Migration** (`create_logos_table.php`):

```php
public function up(): void
{
    Schema::create('logos', function (Blueprint $table) {
        $table->id();
        $table->string('title');
        $table->string('image');
        $table->timestamps();
    });
}
```

3. **Seeder** (`LogoSeeder.php`):

```php
<?php

namespace Database\Seeders;

use App\Models\Logo;
use Illuminate\Database\Seeder;

class LogoSeeder extends Seeder
{
    public function run(): void
    {
        if (Logo::count() == 0) {
            Logo::create([
                'title' => 'PemWeb',
                'image' => '',
            ]);
        }
    }
}
```

4. **Model** (`Logo.php`):

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logo extends Model
{
    use HasFactory;

    protected $table = 'logos';

    protected $fillable = [
        'title',
        'image',
    ];
}
```

---

### ## Footer

#### Model, Migration, and Seeder

1. **Model**: `php artisan make:model Footer -ms`

2. **Migration** (`create_footers_table.php`):

```php
public function up(): void
{
    Schema::create('footers', function (Blueprint $table) {
        $table->id();
        $table->string('section');
        $table->string('label');
        $table->string('url');
        $table->integer('order')->default(0);
        $table->timestamps();
    });
}
```

3. **Seeder** (`FooterSeeder.php`):

```php
<?php

namespace Database\Seeders;

use App\Models\Footer;
use Illuminate\Database\Seeder;

class FooterSeeder extends Seeder
{
    public function run(): void
    {
        if(Footer::count() == 0) {
            Footer::create([
                'section' => 'service',
                'label' => 'Online Service',
                'url' => 'http://localhost',
                'order' => 1,
            ]);
        }
    }
}
```

4. **Model** (`Footer.php`):

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    use HasFactory;

    protected $table = 'footers';

    protected $fillable = [
        'section',
        'url',
        'label',
        'order',
    ];
}
```

---

### ## Running Migrations and Seeding Data

1. Run migrations:

```bash
php artisan migrate
```

2. Seed the data:

```bash
php artisan db:seed
```

If any errors arise, please address them as needed.

---

### ## Filament Resource

Once the migrations and seeders are set up, run the following command to generate Filament resources for each model:

```bash
php artisan make:filament-resource Product --generate
```

Repeat this process for all models like `Seo`, `PageConfig`, `Logo`, and `Footer`.

---

### ## Livewire Setup

Generate a Livewire component for showing the homepage:

```bash
php artisan make:livewire ShowHomePage
```

---

### ## Routing

In your `routes/web.php`, add the following routing for Livewire:

```php
<?php

use App\Livewire\ShowHomePage;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

Livewire::setUpdateRoute(function ($handle) {
    return Route::post(config('app.asset_prefix') . '/livewire/update', $handle);
});

Livewire::setScriptRoute(function ($handle) {
    return Route::get(config('app.asset_prefix') . '/livewire/livewire.js', $handle);
});

Route::get('/', ShowHomePage::class)->name('home');
```

---

### ## Partials

For partial views, you can copy the existing code from your GitHub repository.

---

This should cover everything you need for setting up the models, migrations, seeders, Filament resources, Livewire components, and routing. Let me know if anything else is needed!
