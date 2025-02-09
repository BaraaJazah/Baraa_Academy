<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamQuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        //  Mobile Exam 13  ( 30 questions )

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the full form of SDK in Android development?' ,
            'true_answer' => 'Software Development Kit' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Software Development Kit' ,
            'answer_2' => 'System Development Kit' ,
            'answer_3' => 'Standard Development Kit' ,
            'answer_4' => 'Service Development Kit' ,
            'answer_5' => 'Secure Development Kit' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'Which programming language is primarily used for Android app development?' ,
            'true_answer' => 'Java' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Java' ,
            'answer_2' => 'Python' ,
            'answer_3' => 'Swift' ,
            'answer_4' => 'Ruby' ,
            'answer_5' => 'C#' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the extension of Android application package files?' ,
            'true_answer' => '.apk' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => '.apk' ,
            'answer_2' => '.exe' ,
            'answer_3' => '.app' ,
            'answer_4' => '.msi' ,
            'answer_5' => '.jar' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the base class for all Android activities?' ,
            'true_answer' => 'Activity' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Activity' ,
            'answer_2' => 'Context' ,
            'answer_3' => 'View' ,
            'answer_4' => 'Application' ,
            'answer_5' => 'Fragment' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the XML file that contains all the text labels and strings used in an Android app?' ,
            'true_answer' => 'strings.xml' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'strings.xml' ,
            'answer_2' => 'activity_main.xml' ,
            'answer_3' => 'manifest.xml' ,
            'answer_4' => 'values.xml' ,
            'answer_5' => 'layout.xml' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What layout allows you to position child views in relation to each other in Android?' ,
            'true_answer' => 'RelativeLayout' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'RelativeLayout' ,
            'answer_2' => 'LinearLayout' ,
            'answer_3' => 'LinearLayout' ,
            'answer_4' => 'ConstraintLayout' ,
            'answer_5' => 'GridLayout' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'Which component in Android is used to display a list of scrollable items?' ,
            'true_answer' => 'ListView' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'ListView' ,
            'answer_2' => 'TextView' ,
            'answer_3' => 'ImageView' ,
            'answer_4' => 'Button' ,
            'answer_5' => 'ScrollView' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the Android component that shows a message for a short period of time and disappears?' ,
            'true_answer' => 'Toast' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Toast' ,
            'answer_2' => 'AlertDialog' ,
            'answer_3' => 'Snackbar' ,
            'answer_4' => 'Notification' ,
            'answer_5' => 'Tooltip' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'Which method is called when an activity is first created in Android?' ,
            'true_answer' => 'onCreate()' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'onCreate()' ,
            'answer_2' => 'onStart()' ,
            'answer_3' => 'onResume()' ,
            'answer_4' => 'onPause()' ,
            'answer_5' => 'onDestroy()' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the primary purpose of the AndroidManifest.xml file in an Android project?' ,
            'true_answer' => 'To declare the application components' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To declare the application components' ,
            'answer_2' => 'To design the UI' ,
            'answer_3' => 'To store app resources' ,
            'answer_4' => 'To handle database interactions' ,
            'answer_5' => 'To manage app versions' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the method used to start an activity in Android?' ,
            'true_answer' => 'startActivity()' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'startActivity()' ,
            'answer_2' => 'startService()' ,
            'answer_3' => 'startIntent()' ,
            'answer_4' => 'startComponent()' ,
            'answer_5' => 'startSession()' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'Which file specifies the minimum Android version required by your app?' ,
            'true_answer' => 'AndroidManifest.xml' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'AndroidManifest.xml' ,
            'answer_2' => 'build.gradle' ,
            'answer_3' => 'strings.xml' ,
            'answer_4' => 'settings.gradle' ,
            'answer_5' => 'proguard-rules.pro' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'Which method is used to retrieve a reference to a widget in an activity?' ,
            'true_answer' => 'findViewById()' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'findViewById()' ,
            'answer_2' => 'getViewById()' ,
            'answer_3' => 'findView()' ,
            'answer_4' => 'getWidgetById()' ,
            'answer_5' => 'retrieveViewById()' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the term for an action performed by the user in an Android app, such as a button click?' ,
            'true_answer' => '' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Event' ,
            'answer_2' => 'Gesture' ,
            'answer_3' => 'Activity' ,
            'answer_4' => 'Intent' ,
            'answer_5' => 'Handler' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the primary tool used to debug Android applications?' ,
            'true_answer' => 'Android Debug Bridge (ADB)' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Android Debug Bridge (ADB)' ,
            'answer_2' => 'Android Emulator' ,
            'answer_3' => 'Android Virtual Device (AVD)' ,
            'answer_4' => 'Android Studio' ,
            'answer_5' => 'Dalvik Debug Monitor Server (DDMS)
            ' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the full form of SDK in Android development?' ,
            'true_answer' => 'Software Development Kit' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Software Development Kit' ,
            'answer_2' => 'System Development Kit' ,
            'answer_3' => 'Standard Development Kit' ,
            'answer_4' => 'Service Development Kit' ,
            'answer_5' => 'Secure Development Kit' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'Which programming language is primarily used for Android app development?' ,
            'true_answer' => 'Java' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Java' ,
            'answer_2' => 'Python' ,
            'answer_3' => 'Swift' ,
            'answer_4' => 'Ruby' ,
            'answer_5' => 'C#' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the extension of Android application package files?' ,
            'true_answer' => '.apk' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => '.apk' ,
            'answer_2' => '.exe' ,
            'answer_3' => '.app' ,
            'answer_4' => '.msi' ,
            'answer_5' => '.jar' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the base class for all Android activities?' ,
            'true_answer' => 'Activity' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Activity' ,
            'answer_2' => 'Context' ,
            'answer_3' => 'View' ,
            'answer_4' => 'Application' ,
            'answer_5' => 'Fragment' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the XML file that contains all the text labels and strings used in an Android app?' ,
            'true_answer' => 'strings.xml' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'strings.xml' ,
            'answer_2' => 'activity_main.xml' ,
            'answer_3' => 'manifest.xml' ,
            'answer_4' => 'values.xml' ,
            'answer_5' => 'layout.xml' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What layout allows you to position child views in relation to each other in Android?' ,
            'true_answer' => 'RelativeLayout' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'RelativeLayout' ,
            'answer_2' => 'LinearLayout' ,
            'answer_3' => 'LinearLayout' ,
            'answer_4' => 'ConstraintLayout' ,
            'answer_5' => 'GridLayout' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'Which component in Android is used to display a list of scrollable items?' ,
            'true_answer' => 'ListView' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'ListView' ,
            'answer_2' => 'TextView' ,
            'answer_3' => 'ImageView' ,
            'answer_4' => 'Button' ,
            'answer_5' => 'ScrollView' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the Android component that shows a message for a short period of time and disappears?' ,
            'true_answer' => 'Toast' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Toast' ,
            'answer_2' => 'AlertDialog' ,
            'answer_3' => 'Snackbar' ,
            'answer_4' => 'Notification' ,
            'answer_5' => 'Tooltip' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'Which method is called when an activity is first created in Android?' ,
            'true_answer' => 'onCreate()' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'onCreate()' ,
            'answer_2' => 'onStart()' ,
            'answer_3' => 'onResume()' ,
            'answer_4' => 'onPause()' ,
            'answer_5' => 'onDestroy()' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the primary purpose of the AndroidManifest.xml file in an Android project?' ,
            'true_answer' => 'To declare the application components' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To declare the application components' ,
            'answer_2' => 'To design the UI' ,
            'answer_3' => 'To store app resources' ,
            'answer_4' => 'To handle database interactions' ,
            'answer_5' => 'To manage app versions' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the method used to start an activity in Android?' ,
            'true_answer' => 'startActivity()' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'startActivity()' ,
            'answer_2' => 'startService()' ,
            'answer_3' => 'startIntent()' ,
            'answer_4' => 'startComponent()' ,
            'answer_5' => 'startSession()' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'Which file specifies the minimum Android version required by your app?' ,
            'true_answer' => 'AndroidManifest.xml' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'AndroidManifest.xml' ,
            'answer_2' => 'build.gradle' ,
            'answer_3' => 'strings.xml' ,
            'answer_4' => 'settings.gradle' ,
            'answer_5' => 'proguard-rules.pro' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'Which method is used to retrieve a reference to a widget in an activity?' ,
            'true_answer' => 'findViewById()' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'findViewById()' ,
            'answer_2' => 'getViewById()' ,
            'answer_3' => 'findView()' ,
            'answer_4' => 'getWidgetById()' ,
            'answer_5' => 'retrieveViewById()' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the term for an action performed by the user in an Android app, such as a button click?' ,
            'true_answer' => '' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Event' ,
            'answer_2' => 'Gesture' ,
            'answer_3' => 'Activity' ,
            'answer_4' => 'Intent' ,
            'answer_5' => 'Handler' ,

        ]);

        Question::create([
            'test_id' => 15 ,
            'question' => 'What is the primary tool used to debug Android applications?' ,
            'true_answer' => 'Android Debug Bridge (ADB)' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Android Debug Bridge (ADB)' ,
            'answer_2' => 'Android Emulator' ,
            'answer_3' => 'Android Virtual Device (AVD)' ,
            'answer_4' => 'Android Studio' ,
            'answer_5' => 'Dalvik Debug Monitor Server (DDMS)
            ' ,

        ]);



        // cyper security Exam 14 ( 30 questions )



        Question::create([
            'test_id' => 14 ,
            'question' => 'What does the acronym "VPN" stand for?' ,
            'true_answer' => 'Virtual Private Network' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Virtual Private Network' ,
            'answer_2' => 'Virtual Public Network' ,
            'answer_3' => 'Visual Private Network' ,
            'answer_4' => 'Visual Public Network' ,
            'answer_5' => 'Variable Private Network' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which type of malware is designed to replicate itself and spread to other computers?' ,
            'true_answer' => 'Worm' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Worm' ,
            'answer_2' => 'Virus' ,
            'answer_3' => 'Trojan' ,
            'answer_4' => 'Spyware' ,
            'answer_5' => 'Ransomware' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is the process of converting readable data into an unreadable format to protect it from unauthorized access?' ,
            'true_answer' => 'Encryption' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Encryption' ,
            'answer_2' => 'Encoding' ,
            'answer_3' => 'Decoding' ,
            'answer_4' => 'Decryption' ,
            'answer_5' => 'Compression' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is the term for a weakness in a system that can be exploited by a threat actor?' ,
            'true_answer' => 'Vulnerability' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Vulnerability' ,
            'answer_2' => 'Exploit' ,
            'answer_3' => 'Risk' ,
            'answer_4' => 'Threat' ,
            'answer_5' => 'Malware' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What does "phishing" refer to in cyber security?' ,
            'true_answer' => 'The practice of sending fraudulent emails' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'The practice of sending fraudulent emails' ,
            'answer_2' => 'A type of malware that encrypts files' ,
            'answer_3' => 'A method of testing network security' ,
            'answer_4' => 'A software update to fix vulnerabilities' ,
            'answer_5' => 'A firewall configuration' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which protocol is used for secure communication over a computer network?' ,
            'true_answer' => 'HTTPS' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'HTTPS' ,
            'answer_2' => 'HTTP' ,
            'answer_3' => 'FTP' ,
            'answer_4' => 'SMTP' ,
            'answer_5' => 'POP3' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is a "firewall" used for in network security?' ,
            'true_answer' => 'To manage network traffic' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To manage network traffic' ,
            'answer_2' => 'To detect and remove malware' ,
            'answer_3' => 'To encrypt data' ,
            'answer_4' => 'To backup data' ,
            'answer_5' => 'To compress files' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which of the following is a strong password?' ,
            'true_answer' => '!Q2w#E4r' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => '!Q2w#E4r' ,
            'answer_2' => 'password123' ,
            'answer_3' => '12345678' ,
            'answer_4' => 'abcdefg' ,
            'answer_5' => 'qwerty' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is a common method for verifying the identity of a user?' ,
            'true_answer' => 'Authentication' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Authentication' ,
            'answer_2' => 'Encryption' ,
            'answer_3' => 'Authorization' ,
            'answer_4' => 'Hashing' ,
            'answer_5' => 'Phishing' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which of the following is a type of malicious software designed to damage or disrupt systems?' ,
            'true_answer' => 'Malware' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Malware' ,
            'answer_2' => 'Firewall' ,
            'answer_3' => 'Antivirus' ,
            'answer_4' => 'Cryptography' ,
            'answer_5' => 'Honeypot' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is the purpose of a firewall in network security?' ,
            'true_answer' => 'To prevent unauthorized access' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To prevent unauthorized access' ,
            'answer_2' => 'To encrypt data' ,
            'answer_3' => 'To manage passwords' ,
            'answer_4' => 'To store data securely' ,
            'answer_5' => 'To scan for viruses' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which of the following is a technique used to steal personal information by pretending to be a trustworthy entity?' ,
            'true_answer' => 'Phishing' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Phishing' ,
            'answer_2' => 'Spoofing' ,
            'answer_3' => 'SQL Injection' ,
            'answer_4' => 'DoS Attack' ,
            'answer_5' => 'Brute Force Attack' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is the process of converting data into a coded format to prevent unauthorized access?' ,
            'true_answer' => 'Encryption' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Encryption' ,
            'answer_2' => 'Authentication' ,
            'answer_3' => 'Authorization' ,
            'answer_4' => 'Decryption' ,
            'answer_5' => 'Hashing' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which type of attack involves overwhelming a system with traffic to make it unavailable?' ,
            'true_answer' => 'Denial of Service (DoS) Attack' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Denial of Service (DoS) Attack' ,
            'answer_2' => 'Phishing Attack' ,
            'answer_3' => 'Man-in-the-Middle Attack' ,
            'answer_4' => 'SQL Injection Attack' ,
            'answer_5' => 'Brute Force Attack' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is the primary goal of an intrusion detection system (IDS)?' ,
            'true_answer' => 'To detect unauthorized access' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To detect unauthorized access' ,
            'answer_2' => 'To prevent data breaches' ,
            'answer_3' => 'To encrypt sensitive data' ,
            'answer_4' => 'To manage user permissions' ,
            'answer_5' => 'To monitor network traffic' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What does the acronym "VPN" stand for?' ,
            'true_answer' => 'Virtual Private Network' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Virtual Private Network' ,
            'answer_2' => 'Virtual Public Network' ,
            'answer_3' => 'Visual Private Network' ,
            'answer_4' => 'Visual Public Network' ,
            'answer_5' => 'Variable Private Network' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which type of malware is designed to replicate itself and spread to other computers?' ,
            'true_answer' => 'Worm' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Worm' ,
            'answer_2' => 'Virus' ,
            'answer_3' => 'Trojan' ,
            'answer_4' => 'Spyware' ,
            'answer_5' => 'Ransomware' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is the process of converting readable data into an unreadable format to protect it from unauthorized access?' ,
            'true_answer' => 'Encryption' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Encryption' ,
            'answer_2' => 'Encoding' ,
            'answer_3' => 'Decoding' ,
            'answer_4' => 'Decryption' ,
            'answer_5' => 'Compression' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is the term for a weakness in a system that can be exploited by a threat actor?' ,
            'true_answer' => 'Vulnerability' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Vulnerability' ,
            'answer_2' => 'Exploit' ,
            'answer_3' => 'Risk' ,
            'answer_4' => 'Threat' ,
            'answer_5' => 'Malware' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What does "phishing" refer to in cyber security?' ,
            'true_answer' => 'The practice of sending fraudulent emails' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'The practice of sending fraudulent emails' ,
            'answer_2' => 'A type of malware that encrypts files' ,
            'answer_3' => 'A method of testing network security' ,
            'answer_4' => 'A software update to fix vulnerabilities' ,
            'answer_5' => 'A firewall configuration' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which protocol is used for secure communication over a computer network?' ,
            'true_answer' => 'HTTPS' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'HTTPS' ,
            'answer_2' => 'HTTP' ,
            'answer_3' => 'FTP' ,
            'answer_4' => 'SMTP' ,
            'answer_5' => 'POP3' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is a "firewall" used for in network security?' ,
            'true_answer' => 'To manage network traffic' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To manage network traffic' ,
            'answer_2' => 'To detect and remove malware' ,
            'answer_3' => 'To encrypt data' ,
            'answer_4' => 'To backup data' ,
            'answer_5' => 'To compress files' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which of the following is a strong password?' ,
            'true_answer' => '!Q2w#E4r' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => '!Q2w#E4r' ,
            'answer_2' => 'password123' ,
            'answer_3' => '12345678' ,
            'answer_4' => 'abcdefg' ,
            'answer_5' => 'qwerty' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is a common method for verifying the identity of a user?' ,
            'true_answer' => 'Authentication' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Authentication' ,
            'answer_2' => 'Encryption' ,
            'answer_3' => 'Authorization' ,
            'answer_4' => 'Hashing' ,
            'answer_5' => 'Phishing' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which of the following is a type of malicious software designed to damage or disrupt systems?' ,
            'true_answer' => 'Malware' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Malware' ,
            'answer_2' => 'Firewall' ,
            'answer_3' => 'Antivirus' ,
            'answer_4' => 'Cryptography' ,
            'answer_5' => 'Honeypot' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is the purpose of a firewall in network security?' ,
            'true_answer' => 'To prevent unauthorized access' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To prevent unauthorized access' ,
            'answer_2' => 'To encrypt data' ,
            'answer_3' => 'To manage passwords' ,
            'answer_4' => 'To store data securely' ,
            'answer_5' => 'To scan for viruses' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which of the following is a technique used to steal personal information by pretending to be a trustworthy entity?' ,
            'true_answer' => 'Phishing' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Phishing' ,
            'answer_2' => 'Spoofing' ,
            'answer_3' => 'SQL Injection' ,
            'answer_4' => 'DoS Attack' ,
            'answer_5' => 'Brute Force Attack' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is the process of converting data into a coded format to prevent unauthorized access?' ,
            'true_answer' => 'Encryption' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Encryption' ,
            'answer_2' => 'Authentication' ,
            'answer_3' => 'Authorization' ,
            'answer_4' => 'Decryption' ,
            'answer_5' => 'Hashing' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'Which type of attack involves overwhelming a system with traffic to make it unavailable?' ,
            'true_answer' => 'Denial of Service (DoS) Attack' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Denial of Service (DoS) Attack' ,
            'answer_2' => 'Phishing Attack' ,
            'answer_3' => 'Man-in-the-Middle Attack' ,
            'answer_4' => 'SQL Injection Attack' ,
            'answer_5' => 'Brute Force Attack' ,

        ]);

        Question::create([
            'test_id' => 14 ,
            'question' => 'What is the primary goal of an intrusion detection system (IDS)?' ,
            'true_answer' => 'To detect unauthorized access' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To detect unauthorized access' ,
            'answer_2' => 'To prevent data breaches' ,
            'answer_3' => 'To encrypt sensitive data' ,
            'answer_4' => 'To manage user permissions' ,
            'answer_5' => 'To monitor network traffic' ,

        ]);


        // Microprocessor Exam 14 ( 30 soru )


        Question::create([
            'test_id' => 13 ,
            'question' => 'What is the primary function of a microprocessor in a computer system?' ,
            'true_answer' => 'To execute instructions' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To execute instructions' ,
            'answer_2' => 'To store data' ,
            'answer_3' => 'To manage memory' ,
            'answer_4' => 'To display graphicsTo display graphics' ,
            'answer_5' => 'To handle input/output operations' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What does the acronym "ALU" stand for in a microprocessor?' ,
            'true_answer' => 'Arithmetic Logic Unit' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Arithmetic Logic Unit' ,
            'answer_2' => 'Automatic Load Unit' ,
            'answer_3' => 'Advanced Logic Unit' ,
            'answer_4' => 'Arithmetic Load Unit' ,
            'answer_5' => 'Automated Logic Unit' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'Which component of a microprocessor fetches, decodes, and executes instructions?' ,
            'true_answer' => 'Control Unit' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Control Unit' ,
            'answer_2' => 'Memory' ,
            'answer_3' => 'Register' ,
            'answer_4' => 'Cache' ,
            'answer_5' => 'Input/Output Unit' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What is the size of the data bus in an 8-bit microprocessor?' ,
            'true_answer' => '8 bits' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => '8 bits' ,
            'answer_2' => '4 bits' ,
            'answer_3' => '16 bits' ,
            'answer_4' => '32 bits' ,
            'answer_5' => '64 bits' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What is the purpose of a register in a microprocessor?' ,
            'true_answer' => 'To store data temporarily' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To store data temporarily' ,
            'answer_2' => 'To perform arithmetic operations' ,
            'answer_3' => 'To manage input/output operations' ,
            'answer_4' => 'To store programs permanently' ,
            'answer_5' => 'To decode instructions' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'Which type of memory is directly accessible by the microprocessor?' ,
            'true_answer' => 'Cache' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Cache' ,
            'answer_2' => 'Hard Disk' ,
            'answer_3' => 'ROM' ,
            'answer_4' => 'RAM' ,
            'answer_5' => 'Flash Memory' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What does the acronym "CPU" stand for?' ,
            'true_answer' => 'Central Processing Unit' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Central Processing Unit' ,
            'answer_2' => 'Central Program Unit' ,
            'answer_3' => 'Control Processing Unit' ,
            'answer_4' => 'Central Peripheral Unit' ,
            'answer_5' => 'Central Performance Unit' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What is an instruction set in the context of a microprocessor?' ,
            'true_answer' => 'A set of instructions a microprocessor can execute' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'A set of instructions a microprocessor can execute' ,
            'answer_2' => 'A set of user commands' ,
            'answer_3' => 'A set of instructions a microprocessor can execute' ,
            'answer_4' => 'A set of input/output devices' ,
            'answer_5' => 'A set of software applications' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'Which component temporarily holds data and instructions that the CPU is currently processing?' ,
            'true_answer' => 'Register' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Register' ,
            'answer_2' => 'ALU' ,
            'answer_3' => 'Cache' ,
            'answer_4' => 'Control Unit' ,
            'answer_5' => 'Hard Drive' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What does the acronym "RISC" stand for in microprocessor architecture?' ,
            'true_answer' => 'Reduced Instruction Set Computing' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Reduced Instruction Set Computing' ,
            'answer_2' => 'Random Instruction Set Computing' ,
            'answer_3' => 'Real-time Instruction Set Computing' ,
            'answer_4' => 'Rapid Instruction Set Computing' ,
            'answer_5' => 'Recursive Instruction Set Computing' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'In a microprocessor, what is the function of the Program Counter (PC)?' ,
            'true_answer' => 'To hold the address of the next instruction' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To hold the address of the next instruction' ,
            'answer_2' => 'To store data' ,
            'answer_3' => 'To perform calculations' ,
            'answer_4' => 'To manage input/output operations' ,
            'answer_5' => 'To control memory access' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What is the main advantage of pipelining in a microprocessor?' ,
            'true_answer' => 'Faster execution of instructions' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Faster execution of instructions' ,
            'answer_2' => 'Reduced power consumption' ,
            'answer_3' => 'Increased memory capacity' ,
            'answer_4' => 'Improved graphical performance' ,
            'answer_5' => 'Enhanced data security' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'Which type of microprocessor architecture uses a large number of instructions?' ,
            'true_answer' => 'CISC' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'CISC' ,
            'answer_2' => 'RISC' ,
            'answer_3' => 'MISC' ,
            'answer_4' => 'VLIW' ,
            'answer_5' => 'SIMD' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What does the acronym "DMA" stand for in the context of microprocessors?' ,
            'true_answer' => 'Direct Memory Access' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Direct Memory Access' ,
            'answer_2' => 'Dynamic Memory Allocation' ,
            'answer_3' => 'Dual Memory Architecture' ,
            'answer_4' => 'Data Management Access' ,
            'answer_5' => 'Direct Microprocessor Access' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What is the role of an interrupt in a microprocessor system?' ,
            'true_answer' => 'To execute a service routine' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To execute a service routine' ,
            'answer_2' => 'To execute a specific instruction' ,
            'answer_3' => 'To handle input/output operations' ,
            'answer_4' => 'To increase the clock speed' ,
            'answer_5' => 'To store data permanently' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What is the primary function of a microprocessor in a computer system?' ,
            'true_answer' => 'To execute instructions' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To execute instructions' ,
            'answer_2' => 'To store data' ,
            'answer_3' => 'To manage memory' ,
            'answer_4' => 'To display graphicsTo display graphics' ,
            'answer_5' => 'To handle input/output operations' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What does the acronym "ALU" stand for in a microprocessor?' ,
            'true_answer' => 'Arithmetic Logic Unit' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Arithmetic Logic Unit' ,
            'answer_2' => 'Automatic Load Unit' ,
            'answer_3' => 'Advanced Logic Unit' ,
            'answer_4' => 'Arithmetic Load Unit' ,
            'answer_5' => 'Automated Logic Unit' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'Which component of a microprocessor fetches, decodes, and executes instructions?' ,
            'true_answer' => 'Control Unit' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Control Unit' ,
            'answer_2' => 'Memory' ,
            'answer_3' => 'Register' ,
            'answer_4' => 'Cache' ,
            'answer_5' => 'Input/Output Unit' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What is the size of the data bus in an 8-bit microprocessor?' ,
            'true_answer' => '8 bits' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => '8 bits' ,
            'answer_2' => '4 bits' ,
            'answer_3' => '16 bits' ,
            'answer_4' => '32 bits' ,
            'answer_5' => '64 bits' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What is the purpose of a register in a microprocessor?' ,
            'true_answer' => 'To store data temporarily' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To store data temporarily' ,
            'answer_2' => 'To perform arithmetic operations' ,
            'answer_3' => 'To manage input/output operations' ,
            'answer_4' => 'To store programs permanently' ,
            'answer_5' => 'To decode instructions' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'Which type of memory is directly accessible by the microprocessor?' ,
            'true_answer' => 'Cache' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Cache' ,
            'answer_2' => 'Hard Disk' ,
            'answer_3' => 'ROM' ,
            'answer_4' => 'RAM' ,
            'answer_5' => 'Flash Memory' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What does the acronym "CPU" stand for?' ,
            'true_answer' => 'Central Processing Unit' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Central Processing Unit' ,
            'answer_2' => 'Central Program Unit' ,
            'answer_3' => 'Control Processing Unit' ,
            'answer_4' => 'Central Peripheral Unit' ,
            'answer_5' => 'Central Performance Unit' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What is an instruction set in the context of a microprocessor?' ,
            'true_answer' => 'A set of instructions a microprocessor can execute' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'A set of instructions a microprocessor can execute' ,
            'answer_2' => 'A set of user commands' ,
            'answer_3' => 'A set of instructions a microprocessor can execute' ,
            'answer_4' => 'A set of input/output devices' ,
            'answer_5' => 'A set of software applications' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'Which component temporarily holds data and instructions that the CPU is currently processing?' ,
            'true_answer' => 'Register' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Register' ,
            'answer_2' => 'ALU' ,
            'answer_3' => 'Cache' ,
            'answer_4' => 'Control Unit' ,
            'answer_5' => 'Hard Drive' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What does the acronym "RISC" stand for in microprocessor architecture?' ,
            'true_answer' => 'Reduced Instruction Set Computing' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Reduced Instruction Set Computing' ,
            'answer_2' => 'Random Instruction Set Computing' ,
            'answer_3' => 'Real-time Instruction Set Computing' ,
            'answer_4' => 'Rapid Instruction Set Computing' ,
            'answer_5' => 'Recursive Instruction Set Computing' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'In a microprocessor, what is the function of the Program Counter (PC)?' ,
            'true_answer' => 'To hold the address of the next instruction' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To hold the address of the next instruction' ,
            'answer_2' => 'To store data' ,
            'answer_3' => 'To perform calculations' ,
            'answer_4' => 'To manage input/output operations' ,
            'answer_5' => 'To control memory access' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What is the main advantage of pipelining in a microprocessor?' ,
            'true_answer' => 'Faster execution of instructions' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Faster execution of instructions' ,
            'answer_2' => 'Reduced power consumption' ,
            'answer_3' => 'Increased memory capacity' ,
            'answer_4' => 'Improved graphical performance' ,
            'answer_5' => 'Enhanced data security' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'Which type of microprocessor architecture uses a large number of instructions?' ,
            'true_answer' => 'CISC' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'CISC' ,
            'answer_2' => 'RISC' ,
            'answer_3' => 'MISC' ,
            'answer_4' => 'VLIW' ,
            'answer_5' => 'SIMD' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What does the acronym "DMA" stand for in the context of microprocessors?' ,
            'true_answer' => 'Direct Memory Access' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'Direct Memory Access' ,
            'answer_2' => 'Dynamic Memory Allocation' ,
            'answer_3' => 'Dual Memory Architecture' ,
            'answer_4' => 'Data Management Access' ,
            'answer_5' => 'Direct Microprocessor Access' ,

        ]);

        Question::create([
            'test_id' => 13 ,
            'question' => 'What is the role of an interrupt in a microprocessor system?' ,
            'true_answer' => 'To execute a service routine' ,
            'photo' => 'assets/photos/6.png' ,
            'answer_1' => 'To execute a service routine' ,
            'answer_2' => 'To execute a specific instruction' ,
            'answer_3' => 'To handle input/output operations' ,
            'answer_4' => 'To increase the clock speed' ,
            'answer_5' => 'To store data permanently' ,

        ]);




    }
}
