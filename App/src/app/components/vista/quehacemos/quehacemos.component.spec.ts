import { ComponentFixture, TestBed } from '@angular/core/testing';

import { QuehacemosComponent } from './quehacemos.component';

describe('CalendarioComponent', () => {
  let component: QuehacemosComponent;
  let fixture: ComponentFixture<QuehacemosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ QuehacemosComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(QuehacemosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
