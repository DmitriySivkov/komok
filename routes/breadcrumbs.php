<?php

// Главная
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::for('home', function ($trail) {
    $trail->push('Главная', route('home'));
});

// Главная > Галерея
Breadcrumbs::for('gallery', function ($trail) {
    $trail->parent('home');
    $trail->push('Галерея', route('gallery'));
});

// Главная > Отзывы
Breadcrumbs::for('reviews', function ($trail) {
    $trail->parent('home');
    $trail->push('Отзывы', route('reviews'));
});

// Главная > Вопросы и ответы
Breadcrumbs::for('faq', function ($trail) {
    $trail->parent('home');
    $trail->push('Вопросы и ответы', route('faq'));
});

// Home > Blog > [Category]
//Breadcrumbs::for('category', function ($trail, $category) {
//    $trail->parent('blog');
//    $trail->push($category->title, route('category', $category->id));
//});

// Home > Blog > [Category] > [Post]
//Breadcrumbs::for('post', function ($trail, $post) {
//    $trail->parent('category', $post->category);
//    $trail->push($post->title, route('post', $post->id));
//});
