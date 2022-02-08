import { ComponentFixture, TestBed } from '@angular/core/testing';

import { OfertasTrabajoComponent } from './ofertas-trabajo.component';

describe('OfertasTrabajoComponent', () => {
  let component: OfertasTrabajoComponent;
  let fixture: ComponentFixture<OfertasTrabajoComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ OfertasTrabajoComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(OfertasTrabajoComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
