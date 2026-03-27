use App\Models\User;

User::updateOrCreate(
    ['email' => 'test@example.com'],
    [
        'name' => 'Test User',
        'password' => bcrypt('password123'),
        'email_verified_at' => now(),
        'remember_token' => Str::random(10),
    ]
);
