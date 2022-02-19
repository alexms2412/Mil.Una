/* tslint:disable:no-unused-variable */

import { TestBed, async, inject } from '@angular/core/testing';
import { ActividadesService } from './actividades.service';

describe('Service: Actividades', () => {
  beforeEach(() => {
    TestBed.configureTestingModule({
      providers: [ActividadesService]
    });
  });

  it('should ...', inject([ActividadesService], (service: ActividadesService) => {
    expect(service).toBeTruthy();
  }));
});
