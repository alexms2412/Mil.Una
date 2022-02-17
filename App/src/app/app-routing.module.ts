import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { EventosComponent } from './components/vista/eventos/eventos.component';
import { OfertasTrabajoComponent } from './components/vista/ofertas-trabajo/ofertas-trabajo.component';
import { LoginComponent } from './components/vista/login/login.component';
import { RegisterComponent } from './components/vista/register/register.component';
import { GaleriaComponent } from './components/vista/galeria/galeria.component';
import { LandingPageComponent } from './components/vista/landing-page/landing-page.component';
import { AdminComponent } from './components/vista/admin/admin.component';



const routes: Routes = [

  { path : 'eventos', component:EventosComponent,	data: { animationState: 'Two' } },
  { path : 'galeria', component:GaleriaComponent,data: { animationState: 'Three' } },
  { path : 'trabajo', component:OfertasTrabajoComponent,data: { animationState: 'Four' } },
  { path : 'login', component:LoginComponent },
  { path : 'register', component:RegisterComponent },
  { path : 'admin', component:AdminComponent },
  { path : 'landing', component:LandingPageComponent,data: { animationState: 'One' } },
  { path: '**', redirectTo: '/landing', pathMatch: 'full' }
];


@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]

})

export class AppRoutingModule {}
