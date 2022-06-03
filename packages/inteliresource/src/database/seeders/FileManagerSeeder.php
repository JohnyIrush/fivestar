<?php

namespace Database\Seeders;

use App\Models\FileManager;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FileManager::truncate();
        FileManager::create(
            [
                'name' => 'alberta-2297204_1920.jpg',
                'path' => 'images/alberta-2297204_1920.jpg',
            ]
        );

        FileManager::create(
            [
                'name' => 'background-6795626_1920.png',
                'path' => 'images/background-6795626_1920.png'
            ]
        );

        FileManager::create(
            [
                'name' => 'circles-6998838_1920.jpg',
                'path' => 'images/circles-6998838_1920.jpg'
            ]
        );


        FileManager::create(
            [
                'name' => 'text.txt',
                'path' => 'documents/text.txt'
            ]
        );

        FileManager::create(
            [
                'name' => 'text1.txt',
                'path' => 'documents/text1.txt'
            ]
        );

        FileManager::create(
            [
                'name' => 'text2.txt',
                'path' => 'documents/text2.txt'
            ]
        );

        FileManager::create(
            [
                'name' => 'Bad Bunny  El Apagón 360 Visualizer  Un Verano Sin Ti.mp3',
                'path' => 'audios/Bad Bunny  El Apagón 360 Visualizer  Un Verano Sin Ti.mp3'
            ]
        );

        FileManager::create(
            [
                'name' => 'Bad Bunny  Un Coco 360 Visualizer  Un Verano Sin Ti.mp3',
                'path' => 'audios/Bad Bunny  Un Coco 360 Visualizer  Un Verano Sin Ti.mp3'
            ]
        );

        FileManager::create(
            [
                'name' => 'Bad Bunny  Un Verano Sin Ti 360 Visualizer  Un Verano Sin Ti.mp3',
                'path' => 'audios/Bad Bunny  Un Verano Sin Ti 360 Visualizer  Un Verano Sin Ti.mp3'
            ]
        );


        FileManager::create(
            [
                'name' => 'y2mate.com - The Script  Superheroes Official Video_v720P_Trim.mp4',
                'path' => 'videos/y2mate.com - The Script  Superheroes Official Video_v720P_Trim.mp4'
            ]
        );

        FileManager::create(
            [
                'name' => 'y2mate.com - Jux  Unaniweza Official Music Video_480p.mp4',
                'path' => 'videos/y2mate.com - Jux  Unaniweza Official Music Video_480p.mp4'
            ]
        );

        FileManager::create(
            [
                'name' => 'Ed Sheeran - Bad Habits [Official Vide.mp4',
                'path' => 'videos/Ed Sheeran - Bad Habits [Official Vide.mp4'
            ]
        );

        FileManager::create(
            [
                'name' => 'New Text Document (3).rar',
                'path' => 'compressed/New Text Document (3).rar'
            ]
        );

        FileManager::create(
            [
                'name' => 'New Text Document (2).zip',
                'path' => 'compressed/New Text Document (2).zip'
            ]
        );

        FileManager::create(
            [
                'name' => 'New Text Document.zip',
                'path' => 'compressed/New Text Document.zip'
            ]
        );

        FileManager::create(
            [
                'name' => 'doc.doc',
                'path' => 'documents/doc.doc'
            ]
        );

        FileManager::create(
            [
                'name' => 'docx.docx',
                'path' => 'documents/docx.docx'
            ]
        );

        FileManager::create(
            [
                'name' => 'ppt.ppt',
                'path' => 'documents/ppt.ppt'
            ]
        );

        FileManager::create(
            [
                'name' => 'pptx.pptx',
                'path' => 'documents/pptx.pptx'
            ]
        );

        FileManager::create(
            [
                'name' => 'xls.xls',
                'path' => 'documents/xls.xls'
            ]
        );

        FileManager::create(
            [
                'name' => 'xlsx.xlsx',
                'path' => 'documents/xlsx.xlsx'
            ]
        );

        FileManager::create(
            [
                'name' => 'pdf.pdf',
                'path' => 'documents/pdf.pdf'
            ]
        );

    }
}
