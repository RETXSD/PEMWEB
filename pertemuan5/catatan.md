bikin Api

composer create-project --prefer-dist raugadh/fila-starter .

ubah env

chown -R www-data:www-data storage/*
php artisan migrate:fresh
php artisan project:init
chmod 777 -R storage/* && chmod 777 -R bootstrap/*
php artisan make:model Client -ms
php artisan storage:link
php artisan make:model Product -ms
php artisan make:controller Api/ProductApiController
php artisan make:middleware clientAuth


Client

>>Migration

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('api_token')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};


>>seeder



>>Model

<?php

<?php

namespace App\Models;
Use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Client extends Model
{
    use HasFactory;

    protected static function boot(){
        parent::boot();

        static::creating(function ($client) {

            if (empty($client->api_token)) {
                $client->api_token = str::random(10);
            }
    });
    }


    Protected $table = 'clients';
    Protected $fillable = [
        'name',
        'api_token',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }
}

>>HTPP/MIDDLEWARE

<?php

namespace App\Http\Middleware;

use App\Models\Client;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class clientAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();
        $client = Client::where('api_token', $token)->first();
        if (!$client) {
            return response()->json([
                'message' => 'Unauthorized'
            ], 401);
        }
        $request->merger(['authenticated_client' => $client]);
        return $next($request);
    }
}

>>filament/resource/ClientReource

>>Create

<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ClientResource\Pages;
use App\Filament\Admin\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('api_token')
                    ->disabled()
                    ->label('Token')
                    ->visibleOn('edit')
                    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('api_token')
                    ->copyable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->since(),
        ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }
}

>>edit

<?php

namespace App\Filament\Admin\Resources\ClientResource\Pages;

use App\Filament\Admin\Resources\ClientResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Str;

class EditClient extends EditRecord
{
    protected static string $resource = ClientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),

            Action::make('requestApiToken')
                ->label('Request API Token')
                ->action('requestApiToken')
                ->color('success')
                ->icon('heroicon-o-key')
                ->requiresConfirmation()
                ->action(function () {
                    $this->record->api_token = str::random(10);
                    $this->record->save();
                    $this->fillForm();
                    Notification::make()
                        ->title('New API Token Generated')
                        ->success()
                        ->send();
                    
                   
                })
        ];

    }
    protected function mutateFormDataBeforeSave(array $data):array
    {
       if(empty($data['api_token'])){
            $data['api_token'] = str::random(10);
        }
    }
    {
        
    }
}


Product

>>Migration

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('client_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};

>>Seeder



>>Model

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'name',
        'price',
        'client_id',
    ];


    public function client()
    {
        return $this->belongsTo(Client::class);
    }

}


>>HTPP/CONTROLLERS/API

<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductApiController extends Controller
{
    public function index(Request $request)
    {
        $client = $request->get('authenticated_client');
        return response()->json(['client' => $client,'products' => $client->products,]);
    }
    
}

Providers

<?php

namespace App\Providers;

use App\Policies\ActivityPolicy;
use Filament\Actions\MountableAction;
use Filament\Notifications\Livewire\Notifications;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Enums\Alignment;
use Filament\Support\Enums\VerticalAlignment;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use Illuminate\Validation\ValidationException;
use Spatie\Activitylog\Models\Activity;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::policy(Activity::class, ActivityPolicy::class);
        Page::formActionsAlignment(Alignment::Right);
        Notifications::alignment(Alignment::End);
        Notifications::verticalAlignment(VerticalAlignment::End);
        Page::$reportValidationErrorUsing = function (ValidationException $exception) {
            Notification::make()
                ->title($exception->getMessage())
                ->danger()
                ->send();
        };
        MountableAction::configureUsing(function (MountableAction $action) {
            $action->modalFooterActionsAlignment(Alignment::Right);
        });
    }
}

class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {
        
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        Route::middleware('client.auth', \App\Http\Middleware\clientAuth::class);
    }
}


Routes

>>api

<?php

use App\Http\Controllers\Api\ProductApiController;
use Illuminate\Support\Facades\Route;

Route::middleware('clientAuth')->group(function () {
    Route::get('/products', [App\Http\Controllers\Api\ProductApiController::class, 'index']);
});




>>postmant
localhost/api/products