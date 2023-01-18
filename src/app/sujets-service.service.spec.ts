import { TestBed } from '@angular/core/testing';

import { SujetsServiceService } from './sujets-service.service';

describe('SujetsServiceService', () => {
  let service: SujetsServiceService;

  beforeEach(() => {
    TestBed.configureTestingModule({});
    service = TestBed.inject(SujetsServiceService);
  });

  it('should be created', () => {
    expect(service).toBeTruthy();
  });
});
