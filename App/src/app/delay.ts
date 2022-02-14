import { Injectable } from "@angular/core";

@Injectable()
export class AppConfig {
    load(){
        return new Promise(resolve => setTimeout(resolve, 5000));
    }
}