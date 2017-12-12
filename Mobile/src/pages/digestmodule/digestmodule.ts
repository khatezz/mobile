import { Component } from '@angular/core';
import { NavController, NavParams, ModalController, AlertController } from 'ionic-angular';
import {StomachPage} from '../stomach/stomach';
import {AnimatePage} from '../animate/animate';
import {SubpartPage} from '../subpart/subpart';
import { LiverPage } from '../liver/liver';
import { SintestinePage } from '../sintestine/sintestine';
import { LintestinePage } from '../lintestine/lintestine';
import { PancreasPage } from '../pancreas/pancreas';
import { MouthPage } from '../mouth/mouth';
import { EsophagusPage } from '../esophagus/esophagus';




/*
  Generated class for the Digestmodule page.

  See http://ionicframework.com/docs/v2/components/#navigation for more info on
  Ionic pages and navigation.
*/
@Component({
  selector: 'page-digestmodule',
  templateUrl: 'digestmodule.html'
})
export class DigestmodulePage {

  digests: Array<{title: string, component: any, component1: any, component2: any }>;

	testRadioOpen: boolean;
  	testRadioResult: "";

  constructor(public navCtrl: NavController, public navParams: NavParams, public modalCtrl: ModalController, public alertCtrl: AlertController) {
  	 this.testRadioOpen =false;

      this.digests = [
        {title: 'Stomach', component: StomachPage, component1: AnimatePage, component2: SubpartPage},
        {title: 'Liver', component: LiverPage, component1: AnimatePage, component2: SubpartPage},
        {title: 'Pancreas', component: PancreasPage, component1: AnimatePage, component2: SubpartPage},
        {title: 'Large Intestine', component: LintestinePage, component1: AnimatePage, component2: SubpartPage},
        {title: 'Small Intestine', component: SintestinePage, component1: AnimatePage, component2: SubpartPage},
        {title: 'Mouth', component: MouthPage, component1: AnimatePage, component2: SubpartPage},
        {title: 'Esophagus', component: EsophagusPage, component1: AnimatePage, component2: SubpartPage},


      ];
  }

  ionViewDidLoad() {
    console.log('ionViewDidLoad DigestmodulePage');
  }

  ownPage(page){
    this.navCtrl.push(page.component);
  }

  pressPage(page){

    let confirm = this.alertCtrl.create({
      title: 'Digestive System ',
      message: 'Choose what you want to view',
      buttons: [
        {
          text: 'Animated Sub Parts',
          handler: () => {
            this.navCtrl.push(page.component1);
          }
        },
        {
          text: 'Sub Parts',
          handler: () => {
            this.navCtrl.push(page.component2);
          }
        }
      ]
    });
    confirm.present();

  }

}
