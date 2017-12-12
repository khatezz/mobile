import { NgModule, ErrorHandler } from '@angular/core';
import { IonicApp, IonicModule, IonicErrorHandler } from 'ionic-angular';
import { MyApp } from './app.component';
import { AngularFireModule} from 'angularfire2';
import {Youtube} from '../pipes/youtube'; 
// import { routing } from './app.routing';




//import for tabs

import{HomePage} from '../pages/home/home';
import{AnnouncementPage} from '../pages/announcement/announcement';
import{ QuizPage } from '../pages/quiz/quiz';
import{Page1} from '../pages/page1/page1';
import{Page2} from '../pages/page2/page2';
import{Page3} from '../pages/page3/page3';
import{Page4} from '../pages/page4/page4';
import{Page5} from '../pages/page5/page5';
import{Chapter1Page} from '../pages/chapter1/chapter1';
import{Chapter2Page} from '../pages/chapter2/chapter2';
import{Chapter3Page} from '../pages/chapter3/chapter3';
import{Chapter4Page} from '../pages/chapter4/chapter4';
import{TabsPage} from '../pages/tabs/tabs';
import{ProfilePage} from '../pages/profile/profile';
import{GamesPage} from '../pages/games/games';
import{LibraryPage} from '../pages/library/library';
import { Lesson1Page } from '../pages/lesson1/lesson1';
import { Lesson2Page } from '../pages/lesson2/lesson2';
import { FQuizPage } from '../pages/fQuiz/fQuiz';
import { Multiple } from '../pages/multiples.interface';

import { PopoverContentPage } from '../pages/profile/popover';
import { Grade1Page } from '../pages/grade1/grade1';
import { SimulationPage } from '../pages/simulation/simulation';
import { PopoverPage } from '../pages/page1/popover';
import { IonicStorageModule } from '@ionic/storage';
import { MultiplePage } from '../pages/multiple/multiple';
import { TruePage } from '../pages/true/true';
import { IdentifyPage } from '../pages/identify/identify';
import { GalleryPage } from '../pages/gallery/gallery';
import { DigestivePage } from '../pages/digestive/digestive';
import { DigestmodulePage } from '../pages/digestmodule/digestmodule';
import { StomachPage } from '../pages/stomach/stomach';
import { SubpartPage } from '../pages/subpart/subpart';
import { AnimatePage } from '../pages/animate/animate';
import { TestmainPage } from '../pages/testmain/testmain';
import { MultimediaPage } from '../pages/multimedia/multimedia';
import { LiverPage } from '../pages/liver/liver';
import { SintestinePage } from '../pages/sintestine/sintestine';
import { LintestinePage } from '../pages/lintestine/lintestine';
import { PancreasPage } from '../pages/pancreas/pancreas';
import { MouthPage } from '../pages/mouth/mouth';
import { EsophagusPage } from '../pages/esophagus/esophagus';
import { Quizm1Page } from '../pages/quizm1/quizm1';
import { Questm1Page } from '../pages/questm1/questm1';
import { Questm2Page } from '../pages/questm2/questm2';
import { Questm3Page } from '../pages/questm3/questm3';
import { Questm4Page } from '../pages/questm4/questm4';
import { Questm5Page } from '../pages/questm5/questm5';
import { Questm6Page } from '../pages/questm6/questm6';
import { Questm7Page } from '../pages/questm7/questm7';
import { Questm8Page } from '../pages/questm8/questm8';
import { Questm9Page } from '../pages/questm9/questm9';
import { Questm10Page } from '../pages/questm10/questm10';
import { Questm11Page } from '../pages/questm11/questm11';
import { Questg1Page } from '../pages/questg1/questg1';
import { Questg2Page } from '../pages/questg2/questg2';






import {Video1Page} from '../pages/video1/video1';
import { Vid1Page } from '../pages/vid1/vid1';

import { StudsignPage } from '../pages/studsign/studsign';
import { Lesson4Page } from '../pages/lesson4/lesson4';
import { Lesson3Page } from '../pages/lesson3/lesson3';
import { Lesson5Page } from '../pages/lesson5/lesson5';
import { Lesson6Page } from '../pages/lesson6/lesson6';
import { Lesson21Page } from '../pages/lesson2-1/lesson2-1';
import { Lesson22Page } from '../pages/lesson22/lesson22';
import { Lesson23Page } from '../pages/lesson23/lesson23';
import { Lesson31Page } from '../pages/lesson31/lesson31';
import { Lesson32Page } from '../pages/lesson32/lesson32';
import { Lesson33Page } from '../pages/lesson33/lesson33';
import { Lesson41Page } from '../pages/lesson41/lesson41';
import { Lesson42Page } from '../pages/lesson42/lesson42';
import { Lesson43Page } from '../pages/lesson43/lesson43';
import { Lesson44Page } from '../pages/lesson44/lesson44';
import { StartPage } from '../pages/start/start';
import { Act1Page } from '../pages/act1/act1';
import { Act1aPage } from '../pages/act1a/act1a';
import { Act1bPage } from '../pages/act1b/act1b';
import { Act1cPage } from '../pages/act1c/act1c';
import { Act1dPage } from '../pages/act1d/act1d';
import { Act2Page } from '../pages/act2/act2';
import { Act2aPage } from '../pages/act2a/act2a';
import { Act2bPage } from '../pages/act2b/act2b';
import { Act3Page } from '../pages/act3/act3';
import { Act3aPage } from '../pages/act3a/act3a';
import { Act3bPage } from '../pages/act3b/act3b';
import { Act3cPage } from '../pages/act3c/act3c';
import { Act3dPage } from '../pages/act3d/act3d';
import { Act3ePage } from '../pages/act3e/act3e';   
import { Act4Page } from '../pages/act4/act4';   
import { Act4aPage } from '../pages/act4a/act4a';   
import { Act4bPage } from '../pages/act4b/act4b';   
import { Act4cPage } from '../pages/act4c/act4c';   
import { Act4dPage } from '../pages/act4d/act4d';   
import { Act5Page } from '../pages/act5/act5';   
import { Act5aPage } from '../pages/act5a/act5a';   
import { Act5bPage } from '../pages/act5b/act5b';   
import { Act5cPage } from '../pages/act5c/act5c';   
import { Act5dPage } from '../pages/act5d/act5d';   
import { Act5ePage } from '../pages/act5e/act5e';   
import { Act6Page } from '../pages/act6/act6';   
import { Act6aPage } from '../pages/act6a/act6a';   
import { Act6bPage } from '../pages/act6b/act6b';   
import { Act6cPage } from '../pages/act6c/act6c';   
import { Act7Page } from '../pages/act7/act7';   
import { Act7aPage } from '../pages/act7a/act7a';   
import { Act7bPage } from '../pages/act7b/act7b';   
import { Act7cPage } from '../pages/act7c/act7c';   
import { Act7dPage } from '../pages/act7d/act7d';   
import { Act8Page } from '../pages/act8/act8';   
import { Act8aPage } from '../pages/act8a/act8a';   
import { Act8bPage } from '../pages/act8b/act8b';   
import { Act9Page } from '../pages/act9/act9';   
import { Act9aPage } from '../pages/act9a/act9a';   
import { Act9bPage } from '../pages/act9b/act9b';   
import { Act10Page } from '../pages/act10/act10';   
import { Act10aPage } from '../pages/act10a/act10a';   
import { Act10bPage } from '../pages/act10b/act10b';   
import { Act10cPage } from '../pages/act10c/act10c';   
import { Act10dPage } from '../pages/act10d/act10d';   
import { Act10ePage } from '../pages/act10e/act10e';   
import { Act11Page } from '../pages/act11/act11';   
import { Act11aPage } from '../pages/act11a/act11a';   
import { Act11bPage } from '../pages/act11b/act11b';   
import { Act11cPage } from '../pages/act11c/act11c';   
import { Act12Page } from '../pages/act12/act12';   
import { Act12aPage } from '../pages/act12a/act12a';   
import { Act13Page } from '../pages/act13/act13';   
import { Act13aPage } from '../pages/act13a/act13a';   
import { Act13bPage } from '../pages/act13b/act13b';   
import { Act13cPage } from '../pages/act13c/act13c';   
import { Act13dPage } from '../pages/act13d/act13d';   
import { Act14Page } from '../pages/act14/act14';   
import { Act14aPage } from '../pages/act14a/act14a';   
import { Act14bPage } from '../pages/act14b/act14b';   
import { Act14cPage } from '../pages/act14c/act14c';   
import { Act14dPage } from '../pages/act14d/act14d';   
import { Act14ePage } from '../pages/act14e/act14e';   
import { Act14fPage } from '../pages/act14f/act14f';   
import { Act15Page } from '../pages/act15/act15';   
import { Act15aPage } from '../pages/act15a/act15a';   
import { Act15bPage } from '../pages/act15b/act15b';   
import { Act15cPage } from '../pages/act15c/act15c';   
import { Act15dPage } from '../pages/act15d/act15d';   
import { Act16Page } from '../pages/act16/act16';   
import { Act16aPage } from '../pages/act16a/act16a';   
import { Act16bPage } from '../pages/act16b/act16b';   
import { ProgressmainPage } from '../pages/progressmain/progressmain';
import { QuizresultPage } from '../pages/quizresult/quizresult';
import { SoundPage } from '../pages/sound/sound';
import { LightPage } from '../pages/light/light';
import { HeatPage } from '../pages/heat/heat';
import { ElectricityPage } from '../pages/electricity/electricity';
import { FaultsPage } from '../pages/faults/faults';
import { TyphoonPage } from '../pages/typhoon/typhoon';
import { SolarPage } from '../pages/solar/solar';
import { MatterPage } from '../pages/matter/matter';
import { AtomPage } from '../pages/atom/atom';
import { ElementPage } from '../pages/element/element';
import { EcoPage } from '../pages/eco/eco';
import { SystemPage } from '../pages/system/system';
import { BioPage } from '../pages/bio/bio';
import { HeredityPage } from '../pages/heredity/heredity';
import { BalancePage } from '../pages/balance/balance';
import { ParticlePage } from '../pages/particle/particle';
import { EcosystemPage } from '../pages/ecosystem/ecosystem';
import { SecondgradingPage } from '../pages/secondgrading/secondgrading';
import { ThirdgradingPage } from '../pages/thirdgrading/thirdgrading';
import { FourthgradingPage } from '../pages/fourthgrading/fourthgrading';
import { Pageact1Page } from '../pages/pageact1/pageact1';
import { Illus1Page } from '../pages/illus1/illus1';
import { TypesfPage } from '../pages/typesf/typesf';
import { IntroPage } from '../pages/intro/intro';
import { ImagesmotionPage } from '../pages/imagesmotion/imagesmotion';
import { MotionanimatePage } from '../pages/motionanimate/motionanimate';
import { BalPage } from '../pages/bal/bal';
import { LmotionPage } from '../pages/lmotion/lmotion';
import { InertiaPage } from '../pages/inertia/inertia';
import { InteractionPage } from '../pages/interaction/interaction';
import { AccelPage } from '../pages/accel/accel';
import { OvideosPage } from '../pages/ovideos/ovideos';
import { LessonsecPage } from '../pages/lessonsec/lessonsec';
import { Lessonsec1Page } from '../pages/lessonsec1/lessonsec1';
import { Lessonsec2Page } from '../pages/lessonsec2/lessonsec2';
import { Lessonsec3Page } from '../pages/lessonsec3/lessonsec3';
import { LessonthirdPage } from '../pages/lessonthird/lessonthird';
import { Lessonthird1Page } from '../pages/lessonthird1/lessonthird1';
import { Lessonthird2Page } from '../pages/lessonthird2/lessonthird2';
import { Lessonthird3Page } from '../pages/lessonthird3/lessonthird3';
import { LessonfourPage } from '../pages/lessonfour/lessonfour';
import { Lessonfour1Page } from '../pages/lessonfour1/lessonfour1';
import { Lessonfour2Page } from '../pages/lessonfour2/lessonfour2';
import { Lessonfour3Page } from '../pages/lessonfour3/lessonfour3';
import { Lessonfour4Page } from '../pages/lessonfour4/lessonfour4';
import { Subless2Page } from '../pages/subless2/subless2';
import { Subless3Page } from '../pages/subless3/subless3';
import { Subless4Page } from '../pages/subless4/subless4';
import { Subless5Page } from '../pages/subless5/subless5';
import { Subless6Page } from '../pages/subless6/subless6';
import { Less21Page } from '../pages/less21/less21';
import { Less22Page } from '../pages/less22/less22';
import { Less23Page } from '../pages/less23/less23';
import { Less24Page } from '../pages/less24/less24';
import { Less25Page } from '../pages/less25/less25';
import { Drills1Page } from '../pages/drills1/drills1';
import { Simulation1Page } from '../pages/simulation1/simulation1';
import { GuessPage } from '../pages/guess/guess';
import { Guess1Page } from '../pages/guess1/guess1';
import { Guess2Page } from '../pages/guess2/guess2';
import { Guess3Page } from '../pages/guess3/guess3';
import { Guess4Page } from '../pages/guess4/guess4';
import { Guess5Page } from '../pages/guess5/guess5';
import { Hurry1Page } from '../pages/hurry1/hurry1';
import { TimeqPage } from '../pages/timeq/timeq';
import { VideofirstPage } from '../pages/videofirst/videofirst';
import { VideosecPage } from '../pages/videosec/videosec';
import { RegisterPage } from '../pages/register/register';
import { AtomsPage } from '../pages/atoms/atoms';
import { DigestiveSystemPage } from '../pages/digestive-system/digestive-system';
import { ApplePage } from '../pages/apple/apple';
import { CakePage } from '../pages/cake/cake';
import { FishPage } from '../pages/fish/fish';
import { LessonthirdvideoPage } from '../pages/lessonthirdvideo/lessonthirdvideo';
import { LessonfourvideoPage } from '../pages/lessonfourvideo/lessonfourvideo';








//export 

export const firebaseConfig = {
  
    apiKey: "AIzaSyD4MoK-bEfYq-XB3Z3m4EL4ukATsxQSzkE",
    authDomain: "teacher-c207a.firebaseapp.com",
    databaseURL: "https://teacher-c207a.firebaseio.com",
    projectId: "teacher-c207a",
    storageBucket: "teacher-c207a.appspot.com",
    messagingSenderId: "696360555443"
};

@NgModule({
  declarations: [
    MyApp,
  
    
    
    
    HomePage,
    Page1,
    Page2,
    Page3,
    Page4,
    Page5,
    TabsPage,
    ProfilePage,
    GamesPage,
    LibraryPage,
    Lesson1Page,
    Lesson2Page,
    FQuizPage,
    PopoverContentPage,
    QuizPage,
    Grade1Page,
    MultiplePage,
    SimulationPage,
    
    PopoverPage,
    Video1Page,
    Vid1Page,   
    StudsignPage,
    Lesson4Page,
    Lesson3Page,
    Lesson5Page,
    Lesson6Page,
    Lesson21Page,
    Lesson22Page,
    Lesson23Page,
    Lesson31Page,
    Lesson32Page,
    Lesson33Page,
    Lesson41Page,
    Lesson42Page,
    Lesson43Page,
    Lesson44Page,
    StartPage,
    Act1Page,
    Act1aPage,
    Act1bPage,
    Act1cPage,
    Act1dPage,
    Act2Page,
    Act2aPage,
    Act2bPage,
    Act3Page,
    Act3aPage,
    Act3bPage,
    Act3cPage,
    Act3dPage,
    Act3ePage,
    Act4Page,
    Act4aPage,
    Act4bPage,
    Act4cPage,
    Act4dPage,
    Act5Page,
    Act5aPage,
    Act5bPage,
    Act5cPage,
    Act5dPage,
    Act5ePage,
    Act6Page,
    Act6aPage,
    Act6bPage,
    Act6cPage,
    Act7Page,
    Act7aPage,
    Act7bPage,
    Act7cPage,
    Act7dPage,
    Act8Page,
    Act8aPage,
    Act8bPage,
    Act9Page,
    Act9aPage,
    Act9bPage,
    Act10Page,
    Act10aPage,
    Act10bPage,
    Act10cPage,
    Act10dPage,
    Act10ePage,
    Act11Page,
    Act11aPage,
    Act11bPage,
    Act11cPage,
    Act12Page,
    Act12aPage,
    Act13Page,
    Act13aPage,
    Act13bPage,
    Act13cPage,
    Act13dPage,
    Act14Page,
    Act14aPage,
    Act14bPage,
    Act14cPage,
    Act14dPage,
    Act14ePage,
    Act14fPage,
    Act15Page,
    Act15aPage,
    Act15bPage,
    Act15cPage,
    Act15dPage,
    Act16Page,
    Act16aPage,
    Act16bPage,
    AnnouncementPage,
    TruePage,
    IdentifyPage,
    GalleryPage,
    DigestivePage,
    DigestmodulePage,
    StomachPage,
    SubpartPage,
    AnimatePage,
    TestmainPage,
    MultimediaPage,
    LiverPage,
    SintestinePage,
    LintestinePage,
    PancreasPage,
    MouthPage,
    EsophagusPage,
    Quizm1Page,
    Questm1Page,
    Questm2Page,
    Questm3Page,
    Questm4Page,
    Questm5Page,
    Questm5Page,
    Questm6Page,
    Questm7Page,
    Questm8Page,
    Questm9Page,
    Questm10Page,
    Questm11Page,
    Questg1Page,
    Questg2Page,
    Youtube,
    ProgressmainPage,
    QuizresultPage,
    SoundPage,
    LightPage,
    HeatPage,
    ElectricityPage,
    FaultsPage,
    TyphoonPage,
    SolarPage,
    MatterPage,
    AtomPage,
    ElementPage,
    EcoPage,
    SystemPage,
    BioPage,
    HeredityPage,
    Chapter1Page,
    Chapter2Page,
    Chapter3Page,
    Chapter4Page,
    BalancePage,
    ParticlePage,
    EcosystemPage,
    ThirdgradingPage,
    SecondgradingPage,
    FourthgradingPage,
    Pageact1Page,
    Illus1Page,
    TypesfPage,
    IntroPage,
    ImagesmotionPage,
    MotionanimatePage,
    BalPage,
    LmotionPage,
    InertiaPage,
    AccelPage,
    InteractionPage,
    OvideosPage,
    LessonsecPage,
    LessonthirdPage,
    LessonfourPage,
    Lessonfour1Page,
    Lessonfour2Page,
    Lessonfour3Page,
    Lessonfour4Page,
    Lessonsec1Page,
    Lessonsec2Page,
    Lessonsec3Page,
    Lessonthird1Page,
    Lessonthird2Page,
    Lessonthird3Page,
    Subless2Page,
    Subless3Page,
    Subless4Page,
    Subless5Page,
    Subless6Page,
    Less21Page,
    Less22Page,
    Less23Page,
    Less24Page,
    Less25Page,
    Drills1Page,
    Simulation1Page,
    GuessPage,
    Guess1Page,
    Guess2Page,
    Guess3Page,
    Guess4Page,
    Guess5Page,
    Hurry1Page,
    TimeqPage,
    VideofirstPage,
    VideosecPage,
    RegisterPage,
    AtomsPage,
    DigestiveSystemPage,
    ApplePage,
    CakePage,
    FishPage,
    LessonthirdvideoPage,
    LessonfourvideoPage,

   
    


  ],
  imports: [
    IonicModule.forRoot(MyApp),
    AngularFireModule.initializeApp(firebaseConfig),
    IonicStorageModule.forRoot({
       name: '__mydb',
         driverOrder: ['indexeddb', 'sqlite', 'websql']
    }),

    // routing
    
  ],
  
  bootstrap: [IonicApp],
  entryComponents: [
    MyApp,
   
    
    
    HomePage,
    QuizPage,
    Page1,
    Page2,
    Page3,
    Page4,
    Page5,
    TabsPage,
    ProfilePage,
    GamesPage,
    LibraryPage,
    Lesson1Page,
    Lesson2Page,
    FQuizPage,
    PopoverContentPage,
    MultiplePage,
    
    Grade1Page,
    SimulationPage,
    PopoverPage,
    Video1Page,
    Vid1Page,
    StudsignPage,
    Lesson4Page,
    Lesson3Page,
    Lesson5Page,
    Lesson6Page,
    Lesson21Page,
    Lesson22Page,
    Lesson23Page,
    Lesson31Page,
    Lesson32Page,
    Lesson33Page,
    Lesson41Page,
    Lesson42Page,
    Lesson43Page,
    Lesson44Page,
    StartPage,
    Act1Page,
    Act1aPage,
    Act1bPage,
    Act1cPage,
    Act1dPage,
    Act2Page,
    Act2aPage,
    Act2bPage,
    Act3Page,
    Act3aPage,
    Act3bPage,
    Act3cPage,
    Act3dPage,
    Act3ePage,
    Act4Page,
    Act4aPage,
    Act4bPage,
    Act4cPage,
    Act4dPage,
    Act5Page,
    Act5aPage,
    Act5bPage,
    Act5cPage,
    Act5dPage,
    Act5ePage,
    Act6Page,
    Act6aPage,
    Act6bPage,
    Act6cPage,
    Act7Page,
    Act7aPage,
    Act7bPage,
    Act7cPage,
    Act7dPage,
    Act8Page,
    Act8aPage,
    Act8bPage,
    Act9Page,
    Act9aPage,
    Act9bPage,
    Act10Page,
    Act10aPage,
    Act10bPage,
    Act10cPage,
    Act10dPage,
    Act10ePage,
    Act11Page,
    Act11aPage,
    Act11bPage,
    Act11cPage,
    Act12Page,
    Act12aPage,
    Act13Page,
    Act13aPage,
    Act13bPage,
    Act13cPage,
    Act13dPage,
    Act14Page,
    Act14aPage,
    Act14bPage,
    Act14cPage,
    Act14dPage,
    Act14ePage,
    Act14fPage,
    Act15Page,
    Act15aPage,
    Act15bPage,
    Act15cPage,
    Act15dPage,
    Act16Page,
    Act16aPage,
    Act16bPage,
    AnnouncementPage,
    TruePage,
    IdentifyPage,
    GalleryPage,
    DigestivePage,
    DigestmodulePage,
    StomachPage,
    SubpartPage,
    AnimatePage,
    TestmainPage,
    MultimediaPage,
    LiverPage,
    SintestinePage,
    LintestinePage,
    PancreasPage,
    MouthPage,
    EsophagusPage,
    Quizm1Page,
    Questm1Page,
    Questm2Page,
    Questm3Page,
    Questm4Page,
    Questm5Page,
    Questm6Page,
    Questm7Page,
    Questm8Page,
    Questm9Page,
    Questm10Page,
    Questm11Page,
    Questg1Page,
    Questg2Page,
    ProgressmainPage,
    QuizresultPage,
    SoundPage,
    LightPage,
    HeatPage,
    ElectricityPage,
    FaultsPage,
    TyphoonPage,
    SolarPage,
    MatterPage,
    AtomPage,
    ElementPage,
    EcoPage,
    SystemPage,
    BioPage,
    HeredityPage,
    Chapter1Page,
    Chapter2Page,
    Chapter3Page,
    Chapter4Page,
    BalancePage,
    ParticlePage,
    EcosystemPage,
    ThirdgradingPage,
    SecondgradingPage,
    FourthgradingPage,
    Pageact1Page,
    Illus1Page,
    TypesfPage,
    IntroPage,
    ImagesmotionPage,
    MotionanimatePage,
    BalPage,
    LmotionPage,
    InertiaPage,
    AccelPage,
    InteractionPage,
    OvideosPage,
    LessonsecPage,
    LessonthirdPage,
    LessonfourPage,
    Lessonfour1Page,
    Lessonfour2Page,
    Lessonfour3Page,
    Lessonfour4Page,
    Lessonsec1Page,
    Lessonsec2Page,
    Lessonsec3Page,
     Lessonthird1Page,
    Lessonthird2Page,
    Lessonthird3Page,
     Subless2Page,
    Subless3Page,
    Subless4Page,
    Subless5Page,
    Subless6Page,
     Less21Page,
    Less22Page,
    Less23Page,
    Less24Page,
    Less25Page,
    Drills1Page,
    Simulation1Page,
    GuessPage,
    Guess1Page,
    Guess2Page,
    Guess3Page,
    Guess4Page,
    Guess5Page,
    Hurry1Page,
    TimeqPage,
    VideofirstPage,
    VideosecPage,
    RegisterPage,
    AtomsPage,
    DigestiveSystemPage,
    ApplePage,
    CakePage,
    FishPage,
    LessonthirdvideoPage,
    LessonfourvideoPage,


   

  ],
  providers: [{provide: ErrorHandler, useClass: IonicErrorHandler}, ]
})
export class AppModule {}
