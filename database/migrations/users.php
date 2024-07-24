
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->string('nom');
    $table->string('prenom');
    $table->string('email')->unique();
    $table->string('password');
    $table->enum('type_utilisateur', ['client', 'prestataire']);
    $table->timestamps();
});
