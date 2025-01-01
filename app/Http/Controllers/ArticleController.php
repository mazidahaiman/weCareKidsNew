<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($page = 1)
    {
        // Dummy articles array
        $articleData = [
            ['title' => 'Avoid Gadjet Addiction In Chidren To Develop Talents And Interests',
            'description' => 'Gadgets are popular in children, it brings both positive and negative impacts for children. The serious negative impact is causing gadget addiction in children.'],
            ['title' => 'Top Parenting Techniques', 'description' => 'How you can use techniques to guide, nurture and encourage your child and build your confidence as a parent. Also, learn how to better understand children emotions.'],
            ['title' => 'Positive Parenting Building Healthy Relationships With Your Kids', 'description' => 'Being a sensitive parent and responding to your kids cuts across all areas of parenting.'],
            ['title' => 'Dietary Supplement Intake and Factors Associated', 'description' => 'The prevalence of dietary supplement intake among children.'],
            ['title' => 'Reduce The Use Of Gadgets', 'description' => 'The purpose of this study was to analyze the influence of the usage of gadgets with the social development of school childrenThe influence of gadget usage.'],
            ['title' => 'Digital Addiction Intervention for Children and Adolescents',
            'description' => 'This scoping review seeks to synthesize existing studies to investigate relevant interventions and their effects on digital addiction in children (ages 0–18).'],
            ['title' => 'Pillars for Success Positive Parenting',
            'description' => 'Provides care for children regardless of their age. Each of the nine Pillars for Success will provide the rules and tools for positive change.'],
            ['title' => 'Understanding Parenting And Its Impact On Child Development',
            'description' => 'A structured overview of the existing parenting literature with the aim of developing an evidence-based and culture-sensitive framework of parenting and itsinfluence on child development.'],
            ['title' => 'The Science of Early Childhood Development',
            'description' => 'This paper is designed to provide a framework within which this complex challenge can be addressedmost effectively. Its goal is to promote an understanding of the basic science of early childhood development, including its underlying neurobiology.'],
            ['title' => 'Academy of Nutrition and Dietetics Nutrition',
            'description' => 'The Academy of Nutrition and Dietetics is conducting a cohort study to: assess the predictive validity of the Academy of Nutrition and Dietetics for Parenteral'],
            ['title' => 'Gadgets and Their Impact on Child Development', 'description' => 'This paper aims to visualize the use of gadgets among children on their acceptance and the impacts on their development.'],
            ['title' => 'Mindful Parenting: Future Directions and Challenges', 'description' => 'Mindful parenting teaches parents to focus awareness on theirthoughts, feelings and behaviours, as well as pay attention to their children in an intentional, present-centered and non-judgmentalmanner.'],
            ['title' => 'Single Parenting: Impact on Child’s Development', 'description' => 'The absence or loss of one parent and conflicts between separated and divorced parents affect not only the child’s mental health but also the child’s physical health, overall growth, and future relationships.'],
            ['title' => 'Gadget Addiction Among School Going Children and Its Association to Cognitive Function', 'description' => 'This study was conducted to assess the relationship between media usage and cognitive function among school going children.'],
            ['title' => 'Parenting and Child Mental Health: A Cross-Cultural Perspective', 'description' => 'This article concerns the contributions of culture to parenting and child mental health. It is possible to learn lessons about parenting and child mental health from the study ofdifferent societies.'],
            ['title' => 'Parenting and Child Development: A Relational Health Perspective',
            'description' => 'This review presents a parent-child relational health perspective on development, with an emphasis on socioemotional outcomes in early childhood, along with brief attention to obesity and eating behavior as a relationally informed health outcome.'],
            ['title' => 'Expert Parenting Articles',
            'description' => 'These fact-filled expert articles offer parenting tips, life-changing insight and easy ways to become a better parent. No matter the age of your child, there is no better time than now to learn about the most effective parenting styles and apply them to your own life.'],
            ['title' => 'Building Strong Sibling Relationship Through Play','description' => 'Siblings share a bond that is truly unique and special. They grow together, share experiences, and form life long connection that is just not built on love and support but on a shared journey of life. And one of the best ways to nurture and strengthen this bond is through play. '],
            ['title' => 'The Importance of Mothers’ and Fathers’ Positive Parenting for Toddlers’ and Preschoolers’ Social-Emotional Adjustment',
            'description' => 'The present study underscores the significance of investigating the effects of multiple positive parenting practices simultaneously and calls for involving both mothers and fathers in parenting programs.'],
            ['title' => 'Parents And Caregivers Are Essential To Children’s Healthy Fevelopment',
            'description' => 'Parents, families, and caregivers ensure children are healthy and safe, equip them with skills and resources to succeed, and transmit basic cultural values']

        ];

        // Pagination logic
        $articlesPerPage = 5; // Number of articles per page
        $startIndex = ($page - 1) * $articlesPerPage;
        $paginatedArticles = array_slice($articleData, $startIndex, $articlesPerPage); // Use $articleData here

        // Total pages
        $totalPages = ceil(count($articleData) / $articlesPerPage); // Use $articleData here

        return view('articles.articles', compact('paginatedArticles', 'page', 'totalPages'));
    }
}

