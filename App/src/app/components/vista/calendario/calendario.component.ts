import { Component, OnInit } from '@angular/core';
import { CalendarOptions } from '@fullcalendar/angular';

@Component({
  selector: 'app-calendario',
  templateUrl: './calendario.component.html',
  styleUrls: ['./calendario.component.css']
})
export class CalendarioComponent{

  constructor() { }

  ngOnInit(): void {
  }

  calendarOptions: CalendarOptions = {
    initialView: 'dayGridMonth',
    dateClick: this.handleDateClick.bind(this), 
    events: [
      { title: 'event 1', date: '2022-04-01' },
      { title: 'event 2', date: '2022-02-02' }
    ]
  };

  handleDateClick() {
    alert('date click! ' + 7)
  }

}
