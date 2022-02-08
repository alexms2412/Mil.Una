import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { CalendarioComponent } from './components/vista/calendario/calendario.component';
import { EventosComponent } from './components/vista/eventos/eventos.component';
import { OfertasTrabajoComponent } from './components/vista/ofertas-trabajo/ofertas-trabajo.component';
import { LoginComponent } from './components/vista/login/login.component';
import { RegisterComponent } from './components/vista/register/register.component';
import { AdminComponent } from './components/vista/admin/admin.component';
import { GaleriaComponent } from './components/vista/galeria/galeria.component';


const routes: Routes = [
  { path : 'calendario', component:CalendarioComponent },
  { path : 'eventos', component:EventosComponent },
  { path : 'galeria', component:GaleriaComponent },
  { path : 'trabajo', component:OfertasTrabajoComponent },
  { path : 'login', component:LoginComponent },
  { path : 'register', component:RegisterComponent }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})


export class AppRoutingModule {}
