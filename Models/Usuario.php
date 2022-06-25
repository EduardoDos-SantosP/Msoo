<?php
abstract class Usuario {
    public string $nome = 'Fulano';
    public string $email = 'teste@teste.com';
    public string $senha = '123';

    private string $tipo = 'camareira';

    public static function new(string $class): Usuario
    {
         $class = ucfirst(strtolower($class));//transformando o valor em PascalCase por garantia

         //Se a sub classe não existe lança um erro
        if (!class_exists($class))
            throw new Exception("A classe '$class' não existe!");

        //Se o nome da classe armazenada em $class não for sub classse de Usuario lança um erro
        if (!is_subclass_of($class, self::class))
            throw new Exception("A classe $class não é uma instância de " . self::class . "!");


        //Retorna uma instância de Usuario por meio do nome uma classe filha
        return new $class;
    }
}