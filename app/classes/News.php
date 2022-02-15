<?php


namespace App\classes;


class News
{
    protected $allNews;
    protected $result = [];

    public function index()
    {
        return [
            0=>[
                'id'=>1,
                'categoryid'=> 1,
                'name'=>'বাপার আলোচনা সভাসুন্দরবনকে ধীরে ধীরে মেরে ফেলা হচ্ছে',
                'description'=> '
                ঘূর্ণিঝড়ের মতো প্রাকৃতিক দুর্যোগের বড় আঘাত থেকে সুন্দরবন বাংলাদেশকে রক্ষা করে। জলবায়ু পরিবর্তনজনিত পরিস্থিতিতে এই বনকে রক্ষা করা জরুরি। কিন্তু সুন্দরবনকে ধীরে ধীরে মেরে ফেলা হচ্ছে।
                
                ',
                'hour'=>'৬ ঘণ্টা আগে',
                'image'=>'assets/img/pa1.jfif',
            ],
            1=>[
                'id'=>2,
                'name'=>'Bangladesh',
                'categoryid'=> 1,
                'name'=>'ইসি গঠনে যাঁদের নাম, কোন পেশার কতজন',
                'description'=> '
                নির্বাচন কমিশন (ইসি) গঠনের জন্য বিভিন্ন রাজনৈতিক দল, সংগঠন ও ব্যক্তি অনুসন্ধান কমিটির কাছে নাম জমা দিয়েছে। কমিটি সোমবার তাদের কাছে জমা পড়া নামগুলো (৩২২টি) প্রকাশ করেছে।
                
                ',
                'hour'=>'৭ ঘণ্টা আগে',
                'image'=>'assets/img/pab2.jpg',
            ],

            2=>[
                'id'=>3,
                'categoryid'=> 1,
                'name'=>'রাস্তায় ম্যাজিস্ট্রেটকে মারধর করে আটক প্রবাসী',

                'description'=> '
                পুলিশ কর্মকর্তা মোখলেসুর রহমান বলেন, নগরের জিইসি মোড় এলাকায় স্ত্রীকে নিয়ে হাঁটছিলেন ওই ম্যাজিস্ট্রেট। এ সময় একটি ব্যক্তিগত গাড়ি তাঁদের ধাক্কা দেয়।
                
                ',
                'hour'=>'৭ ঘণ্টা আগে',
                'image'=>'assets/img/pab3.jpg',
            ],
            3=>[
                'id'=>4,
                'categoryid'=> 2,
                'name'=>'কিয়েভ থেকে সরিয়ে নেওয়া হচ্ছে মার্কিন দূতাবাস',

                'description'=> '

                কিয়েভ থেকে সরিয়ে নেওয়া হচ্ছে মার্কিন দূতাবাস
                মার্কিন দূতাবাস কিয়েভ থেকে সরিয়ে নেওয়া হলেও ইউক্রেন সরকারের সঙ্গে কার্যক্রম চালিয়ে যাওয়া হবে বলে জানিয়েছেন ব্লিঙ্কেন। তিনি বলেন, রাশিয়া-ইউক্রেন ইস্যুতে চলমান সংকট সামাল দিতে কূটনৈতিক প্রচেষ্টা চালিয়ে ...
                
                ',
                'hour'=>'৩ ঘণ্টা আগে',
                'image'=>'assets/img/paw1.jpg',
            ],
            4=>[
                'id'=>5,
                'categoryid'=> 2,
                'name'=>'ন্যাটোর স্বপ্ন ত্যাগ করছে ইউক্রেন ',

                'description'=> '
                
                ইউরোপে উত্তেজনা ন্যাটোর স্বপ্ন ত্যাগ করছে ইউক্রেন
                ইউক্রেন সংকট সমাধানে রাশিয়ার সঙ্গে পশ্চিমা বিশ্ব তাদের কূটনৈতিক তৎপরতা অব্যাহত রেখেছে। এই পরিস্থিতি রাশিয়ার পক্ষ থেকে হুমকি দেওয়া হয়েছে, তাদের জলসীমায় কোনো বিদেশি যুদ্ধজাহাজ অবৈধভাবে প্রবেশ করলে রুশ ...
                
                ',
                'hour'=>'৮ ঘণ্টা আগে',
                'image'=>'assets/img/paw2.jfif',
            ],
            5=>[
                'id'=>6,
                'categoryid'=> 2,
                'name'=>'উত্তর প্রদেশের ভোটে এবার হিন্দুত্ববাদের পরীক্ষা',

                'description'=> '
                উত্তর প্রদেশের সঙ্গে গতকাল সোমবার ভোট হলো উত্তরাখন্ড ও গোয়াতেও। বিকেল পাঁচটা পর্যন্ত উত্তর প্রদেশে ভোট পড়ে ৬০ শতাংশের কিছু বেশি। পাহাড়ি রাজ্য উত্তরাখন্ডে ৫৯ শতাংশ। প্রবল উৎসাহ ছিল গোয়ায়। সেখানে ভোট ...
                
                ',
                'hour'=>'৮ ঘণ্টা আগে',
                'image'=>'assets/img/paw3.jpg',
            ],
            6=>[
                'id'=>7,
                'categoryid'=> 3,
                'name'=>'শ্রমিকের ডিজিটাল তথ্যভান্ডার করবে সরকার ',
                'description'=> '
                ডিজিটাল তথ্যভান্ডার হলে কোন খাতে কত শ্রমিক কাজ করেন, তার প্রকৃত সংখ্যা জানা যাবে। শ্রমিকদের সব ধরনের সুযোগ-সুবিধা প্রদান করাটাও সহজ হবে।
                
                ',
                'hour'=>'১২ ঘণ্টা আগে',
                'image'=>'assets/img/pb1.jfif',
            ],
            7=>[
                'id'=>8,
                'categoryid'=> 3,
                'name'=>'নতুন নির্দেশনা জারিকেন্দ্রীয় ব্যাংকের চেকের বিপরীতে ঋণ ছাড় নয়',

                'description'=> '
                কোনো কোনো আর্থিক প্রতিষ্ঠান ঋণের টাকা ছাড় করাতে বাংলাদেশ ব্যাংকের চেক ব্যবহার করছে। এর মাধ্যমে বাংলাদেশ ব্যাংকে রক্ষিত ওই আর্থিক প্রতিষ্ঠানের চলতি হিসাব থেকে টাকা ছাড় করা হচ্ছে।
                
                ',
                'hour'=>'১৬ ঘণ্টা আগে',
                'image'=>'assets/img/pb2.jpeg',
            ],
            8=>[
                'id'=>9,
                'categoryid'=> 3,
                'name'=>'ফুলের ব্যবসাযশোরের কৃষক হাসে ফুল চাষে',

                'description'=> '
                ফুলচাষি হযরত আলী ৭৫০টি গোলাপ ফুল নিয়ে যশোরের ঝিকরগাছা উপজেলার গদখালী পাইকারি ফুলের মোকামে যান। সকাল আটটার মধ্যেই প্রতিটি ১৩ টাকা দরে সব গোলাপ কিনে নেন ব্যাপারীরা। এতে ভীষণ খুশি ঝিকরগাছার হাড়িয়া ...
                
                ',
                'hour'=>'১৬ ঘণ্টা আগে',
                'image'=>'assets/img/pb3.png',
            ],

        ];
    }
    public function shortNews($categoryId)
    {
//        echo $categoryId;
        $this->allNews= $this->index();
//        echo '<pre>';
//        print_r($this->allProducts);
        foreach ($this->allNews as $news)
        {
            if ($news['categoryid'] == $categoryId)
            {
                array_push($this->result,$news);
            }
        }
        return $this->result;


    }

    // public function getProductDetails($productId)
    // {
    //     $this->allProducts= $this->index();
    //     foreach ($this->allProducts as $product)
    //     {
    //         if($product['id']== $productId)
    //         {
    //             return $product;
    //         }
    //     }
    // }

}