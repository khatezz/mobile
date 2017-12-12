import { Routes, RouterModule } from "@angular/router";
import { QuizPage } from '../pages/quiz/quiz';


const APP_ROUTES = [
	{ path: '', component: QuizPage }

];

export const routing = RouterModule.forRoot(APP_ROUTES);
